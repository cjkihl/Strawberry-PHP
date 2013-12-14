<?php
/**
 * The main index controller
 * 
 * If the router can't find a controller by the query-string it will
 * try to search the main-controller. Here you find the index-function that
 * will run if the query-string is empty
 */
class Menu_controller extends Controller {

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