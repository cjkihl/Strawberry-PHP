<?php
/**
 * The main index controller
 * 
 * If the router can't find a controller by the query-string it will
 * try to search the main-controller. Here you find the index-function that
 * will run if the query-string is empty
 * 
 * @package Controllers
 * @author Carl-Johan Kihl
 * @since 2013-08-14 
 */
class Main_controller extends Controller {

    /**
     * A simple guestbook
     * 
     * This gusetbook is a siple controller that shows you how simple it is to
     * add new functionality and modules to Strawberry PHP
     */
    public function guestbook($action = false) {

        $out = array();

        //The "action = create" creates a new post in the guestbook
        if ($action == 'create') {
            $errors = array();

            //Validate text
            $text = $this->request->post('text', '');
            if (empty($text))
                $errors['text'] = "Is required";

            //Validate author
            $author = $this->request->post('author', '');
            if (empty($author))
                $errors['author'] = "Is required";

            //If no errors save to the model
            if (empty($errors)) {
                $post = new Post(array('text' => $text, 'author' => $author));
                $post->save();
            } else {
                $out['errors'] = $errors;
            }
        } else if($action=='delete') {
            Post::table()->delete(array());
        }

        //Get all posts
        $out['posts'] = Post::all();
        $this->response->body($this->render('main/guestbook.html.twig', $out));
    }

    /**
     * Tests for Request and response
     * Remove if you dont want it on your public site
     * 
     * @param string test The test to run
     */
    public function test($test = null) {

        if ($test == 'status') {
            $this->response->status($this->request->params(1, 200));
        }

        if ($test == 'download') {
            $this->response->download('text/plain', $this->request->params(1, 'my_file.txt'));
        }

        if ($test == 'auth' && $this->request->authUser() == 'admin') {
            $this->response->authentication('Min area');
        }

        if ($test == 'nochache') {
            $this->response->noCache();
        }

        if ($test == 'json') {
            $result = ((object) array(
                        'title' => 'Json RPC Request',
                        'method' => $this->request->action(),
                        'controller' => $this->request->controller(),
                        'params' => $this->request->get()));
            $this->response->bodyJsonRpc($result, null, uniqid());
        } else {
            $this->response->body($this->render('main/testbed.html.twig', array('response' => $this->response)));
        }
    }

    /**
     * The index medthod will be called by default of no other method is specified
     */
    public function index() {
       $this->response->body($this->render('main/welcome.html.twig'));
    }
    
    /**
     * The default controller for 404 Not found Exceptions or 
     * when a url-query can't be solved
     */
    public function notfound() {
        $out['title'] = i18n("404notfound_title");
        $out['message'] = i18n("404notfound_message");
        $this->response->body($this->render('main/error.html.twig',$out));
    }
}