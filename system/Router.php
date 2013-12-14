<?php
/**
 * Router for Strawberry PHP
 * 
 * The router parses the query-string and extracts the controller name, the medthod
 * name and optional number of extra parameters 
 *
 * @package System
 * @author Carl-Johan Kihl
 * @since 2013-08-14
 */
class Router {

    public function route() {
        $requestURI = explode('/', $_SERVER['REQUEST_URI']);
        $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);

        for ($i = 0; $i < sizeof($scriptName); $i++) {
            if ($requestURI[$i] == $scriptName[$i]) {
                unset($requestURI[$i]);
            }
        }

        //Filter arguments
        $args = filter_var_array(array_values($requestURI), FILTER_SANITIZE_STRING);

        //Check if first arg is a controller else assume the default controller
        if (!empty($args) && !empty($args[0]) && file_exists(config('controller_path') . '/' . ucfirst($args[0]) . '.php')) {
            $cFileName = ucfirst(array_shift($args));
            
        } else {
            $cFileName = config('default_controller');
        }
        
        //Require the correct controller
        $cPath = config('controller_path') . '/' . $cFileName . '.php';
        require $cPath;

        //Find class in the controller
        $cName = ucfirst($cFileName).'_controller';
        if (!class_exists($cName)) {
            throw new PageNotFoundException("Controller class $cName does not exist in $cPath");
        }

        //See if metdhod is specified else use default-metdhod name index
        if (empty($args[0])) {
            $mName = 'index';
        } else {
            $mName = array_shift($args);
        }
 
        try {
            //Find the controller method and check if it's public
            $mMethod = new ReflectionMethod($cName, $mName);
            if ($mMethod->isStatic() && !$mMethod->isPublic()) {
                throw new PageNotFoundException("Method $mName is not accessible in class $cName");
            }

            //Get all the parameters from the query-string
            $params = array();
            for ($i = 0; $i < min(array(count($args), $mMethod->getNumberOfParameters())); $i++) {
                $params[] = $args[$i];
            }

            //Create the request and response
            $request = new Request($cName, $mName, $params, $args, 'Default');
            $response = new Response();

            //Create the controller and invoke the controller method
            $c = new $cName($request,$response);
            $mMethod->invokeArgs($c, $params);
        } catch (Exception $e) {
            throw new PageNotFoundException($e->getMessage());
        }
        //Send the reponse
        $response->send();
        exit();
    }
    
    public function route404NotFound() {
        
        //Require the Main controller
        require_once config('controller_path') . '/'.config('default_controller').'.php';
        
        //Create the Request and Response for 404 Not found message
        $request = new Request('Main_controller','notfound',array(),array(),'404 Not Found');
        $response = new Response();
        
        //Invoke the notfound method in main controller
        $controller = new Main_controller($request,$response);
        $controller->notfound();
        
        //Send the response
        $response->send();
        exit();
    }

}
?>
