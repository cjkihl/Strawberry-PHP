<?php
/**
 * The controller for the Menu-module
 * 
 * The menu-module is responsible for handling links and menues and the website
 * and together with the Theme-module render them. The source to the menues is 
 * stored in the models-folder in navbar.json.  
 * 
 * 
 * @package Controllers
 * @author Carl-Johan Kihl
 * @since 2013-08-14 
 */
class Menu_controller extends Controller {

    
    /**
     * Saves the menu posted by the menu-editor
     */
    public function save() {
        if(!User::authorize("Admin")) {
            $this->login();
            return;
        }
        
        $menu = filter_input(INPUT_POST, 'menu');
        if(!$menu || json_decode($menu)==NULL) {
            $this->response->bodyJsonRpc(null,'Invalid menu');
            return;
        }
        
        if(file_put_contents(APP_PATH.'/models/navbar.json', $menu)==false) {
            $this->response->bodyJsonRpc(null,'Couldn\'t save the menu to file: '.APP_PATH.'/models/navbar.json');
            return;
        }
        $this->flash('message','Menu saved');
        $this->response->bodyJsonRpc('Menu Saved');        
    }
 
    /**
     * Shows the menu and navbar editor
     */
    public function index() {
        
        if(!User::authorize("Admin")) {
            $this->login();
            return;
        }

        $menu = null;
        //Load the menu-model
         if(($file = file_get_contents(APP_PATH.'/models/navbar.json'))!== false) {
            $menu = json_decode($file,true);
        } else {
           $this->flash('error', 'It was not possible to read the menu-model'); 
        }
        
        $this->response->body($this->render('menu/editor.html.twig'));
    }
}