<?php
/**
 * The base Controller all other controller will extend from this
 * 
 * Each public method in the controller acts as a site accessible by the uri-string
 * Each method can get info from the request-object and modify the response object
 * to give the caller a given output.
 * 
 * @package Controllers
 * @author Carl-Johan Kihl
 * @since 2013-08-14
 */
class Controller {

    /**
     * @var Request $request The request that called this controller
     */
    protected $request;
    
    /**
     *
     * @var Response $response The response that will be returned to the system
     */
    protected $response;
    
    /**
     * @var array $routes Available routes (so the controller can make new requests)
     */
    protected $routes;

    /**
     *
     * @var string The theme-name 
     */
    protected $theme = null;
    
    /**
     * @var Twig_Environment $twig Template engine
     */
    private $twig;

    /**
     * @var array $lang Dictionary for i18n
     */
    private $lang = array();
    
    /**
     * @var array Flash variables can be used to send session messages through a redirect
     */
    private $flash;
    
    /**
     * 
     * Get or set a flash variable
     * 
     * Flash variables can be uset to send session messages during a redirect.
     * It will only be stored in the session for on redirect and then dissapear
     * 
     * @param type $key is usefull for setting the message category, can be message, warning or error
     * @param type $value The message
     */
    protected function flash($key=null,$value=null) {
        if($key==null) return $this->flash;
        
        if($value==null) return $this->flash[$key];
        
        $_SESSION['flash'][$key] = $value;
    }
    
    /**
     * Constructs a controller
     * 
     * @param Request $request a controller needs a request object with info about the request
     * @param Response $response a controller needs a response object with info about the response
     */
    function __construct(Request $request,  Response $response) {
        
        $this->request = $request;
        $this->response = $response;
        
        //Handle flash messages
        $this->flash = isset($_SESSION['flash']) ? $_SESSION['flash'] : array();
        $_SESSION['flash'] = array();
        
        //Add the common dictionary
        addDictionary('common');
        
        //Start twig template engine
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(APP_PATH);
        $this->twig = new Twig_Environment($loader, array(
        'cache' => config('twig_cache_path'),
        'debug' => config('twig_debug')   
        ));
        
        //Twig Url extension
        $this->twig->addFunction(new Twig_SimpleFunction('url', function ($url=null) {
            return url($url);
        }));
        
        //Twig content extension
        $this->twig->addFunction(new Twig_SimpleFunction('content', function ($file='') {
         
        if(($file = file_get_contents(APP_PATH.'/'.$file))!== false) {
            return json_decode($file,true);
        } else return false;
        }));
        
        //Twig logon extension
        $this->twig->addFunction(new Twig_SimpleFunction('logged_in_user', function () {
            
            $id = Authorization::getInstance()->authorize();
            if($id===false) {
                return  false;}
            
            try { $user = User::find($id); return $user; 
            
            } catch (Exception $e) {return false;}  
        }));
        
        $this->twig->addFilter(new Twig_SimpleFilter('i18n','i18n'));
    }
    
    private function twig_filter_i18n($string,$options = null) {
            return i18n($string,$options);
    }
        
    /**
     * Set the current theme
     * @param string $theme_name
     */
    public function setTheme($theme_name) {
        $this->theme = $theme_name;
    }
    
    /**
     * Default 404 page not found
     * @return Response a respone for 404 Not found
     */
    public function pageNotFound() {
        $response = new Response();
        return $response->body($this->render('error.html.twig',array('message'=>'Sidan hittades inte')));
    }
    
    /**
     * @return Request The request that called this controller
     */
    protected function request() {
        return $this->request;
    }
    
    /**
     * @return Response The controller response
     */
    public function response() {
        return $this->response;
    }
    
    /**
     * Shortcut helper for TwigView::getInstance()->render()
     * @param string $name
     * @param array $context
     * @return string The rendered context
     */
    function render($name, $context = array()) {

        //Set context variables
        $context['flash'] = $this->flash;
        $context['request'] = $this->request;
        $context['config'] = config();
        $context['routes'] = $this->routes;
        
        //Load the specified theme
        if($this->theme==null) $this->theme = Theme::getCurrentTheme();
       
        $theme = array(
            'id'=>$this->theme->id,
            'key'=>$this->theme->key,
            'name'=>$this->theme->name,
            'params'=>  json_decode($this->theme->params),
            'url'=>APP_PATH.'/themes/'.$this->theme->key,
            'img_url'=>config('img_url').'/themes/'.$this->theme->key,
            'css_url'=>config('css_url').'/themes/'.$this->theme->key,
            'template'=>'/themes/'.$this->theme->key.'/'.$this->theme->key.'.html.twig'
        );
        $context['theme'] = $theme;
        
        //Add config to array
        return $this->twig->render('views/'.$name, $context);
    }
}