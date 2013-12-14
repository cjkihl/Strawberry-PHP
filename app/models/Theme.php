<?php
define('CFG_THEME', 'cfg_theme');
/**
 * Model for the Theme-module
 * 
 * This model is a part of ActiveRecord and inherits most of its functionalty
 * from the Active Record ORM-structure
 *
 * @package Models
 * @author Carl-Johan Kihl
 * @since 2013-08-14
 */
class Theme extends ActiveRecord\Model {

    const DEFAULT_THEME_ID = 5;
    const SESSION_THEME = 'session_theme';
    /**
     * Loads a theme
     * @param string $theme_name
     * @return array|boolean The theme or false on failure
     */
    public static function load($theme_name) {

        $content = file_get_contents(APP_PATH.'/themes/'.$theme_name.'/'.$theme_name.'.json');
        if($content != false && ($theme = json_decode($content,true))!==null) {
             
            $theme['img_url'] = config('img_url').'/themes/'.$theme_name; 
            $theme['css_url'] = config('css_url').'/themes/'.$theme_name; 
            $theme['template'] = 'themes/'.$theme_name.'/'.$theme_name.'.html.twig';
            
            return $theme;
        } else return false;
    }
    
    /**
     * Gets the default theme
     * @return Theme The current theme
     */
    public static function getCurrentTheme() {
        
        //Find User's theme
        $user = User::authorize();
        if($user && $user->theme_id!=null) {
            $theme = Theme::find($user->theme_id);
            if($theme) return $theme;
        } 
        
        //No user, theme may be stored in the session
        if(isset($_SESSION[Theme::SESSION_THEME]) && 
                    ($t = filter_var($_SESSION[Theme::SESSION_THEME],FILTER_SANITIZE_NUMBER_INT))!= false) {
                $theme = Theme::find($t);
                if($theme) return $theme;
            }

       //Else return default theme
       $theme = Theme::find(Theme::DEFAULT_THEME_ID);
       return $theme;
    }
    
    public static function setCurrentTheme($id) {
         //Find the current theme
        if(($user = User::authorize()) !== false) {
            $user->theme_id = $id;
            $user->save();
        } else {
            $_SESSION[Theme::SESSION_THEME] = $id;
           
        }
    }
    
    public function set_params($params) {
        $this->assign_attribute('params',json_encode($params));
    }
    
    
   
}

?>
