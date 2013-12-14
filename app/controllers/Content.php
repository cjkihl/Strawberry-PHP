<?php
/**
 * Controller for handling content
 */
class Content_controller extends Controller {

    public function __construct(\Request $request, \Response $response) {
        parent::__construct($request, $response);
        
        //Add specific dictionary for content
        addDictionary('content');
    }
    /**
     * Shows an list with all pages
     * Here you can create/read/update and delete pages
     */
    public function all($action=null,$id=null) {
        
        //You need o have writers permission to enter this page
        $user = User::authorize('Writer');
        //Check if user has logged in
        if ($user == false) {
            $this->flash('warning', i18n("no_permission_edit_content"));
            $this->response()->redirect(url('user/login'));
            exit();
        }
        $out = array();
        //If action is given we also need the parameter
        if($action!==null) {
            if(!is_numeric($id) || ($page = Content::find($id)) == false) {
                $this->response()->redirect(url('content/all'));
                exit();
            }
            $message_type = 'message';
            $message = '';
            if($action == 'publish') {
                $page->deleted = null;
                if(!$page->save()) {
                    $message_type = 'warning';
                    $message = i18n("error_publish");
                }
                $message = $page->title.' has been published';
                
            } else if($action == 'unpublish') {
                $page->deleted = date("Y-m-d H:i:s");
                if(!$page->save()) {
                    $message_type = 'warning';
                    $message = i18n("error_unpublish");
                }
                $message = $page->title.' har avpublicerats';
                
            } else if($action == 'delete') {
                if(!$page->delete()) {
                    $message_type = 'warning';
                    $message = i18n("error_delete");
                }
                 $message = $page->title.' has been deleted';
            }
                
            $this->flash($message_type, $message);
            $this->response()->redirect(url('content/all'));
            exit();
        }
       
        $out['pages'] = Content::all();
        $this->response->body($this->render('content/all.html.twig', $out));
    }
    
    /**
     * Create or update a page
     */
    public function edit($action = null) {
        
        //You need to have writers permission to enter this page
        $user = User::authorize('Writer');
         
        //Check if user has logged in
        if ($user == false) {
            $this->flash('warning', i18n("no_permission_edit_content"));
            $this->response()->redirect(url('user/login'));
            exit();
        }
        
        //Clear form if there's no post
        if (!$this->request()->method('post')) {
            PFBC\Form::clearErrors("content_edit");
            PFBC\Form::clearValues("content_edit");
        }
        
        //Create form
        $form = new PFBC\Form("content_edit", url('content/edit/process'));
        $form->configure(array('prevent' => array('jQuery', 'bootstrap')));
        
        //Create the form elements
        $form->addElement(new PFBC\Element\Textbox(i18n("alias"), 'key', array('required' => 1)));
        $form->addElement(new PFBC\Element\Select(i18n('type'), 'type', array('blog' => i18n('blogpost'), 'page' => i18n('page'))));
        $form->addElement(new PFBC\Element\Textbox(i18n('title'), 'title', array('required' => 1)));
        $form->addElement(new PFBC\Element\TinyMCE(i18n('content'), 'data', array('required' => 1)));
        $form->addElement(new PFBC\Element\Textbox(i18n('author'), 'author', array('required' => 1)));
        $form->addElement(new PFBC\Element\Button(i18n('register')));
        
        //New action: creates a new page
        if($action == null) {
        $out['title'] = "Create new page";
        
         //Put user's name in the author field as default
         $form->setValues(array('author'=>$user->name));
        
        
        //If action is numeric we're in edit mode
        } else if(is_numeric($action) && $action >= 0) {
            
            $page = Content::find($action);
            if(!$page) {
                $this->response->redirect(url('content/all'));
                exit();
            }
            
            $out['title'] = "Edit $page->title";
            //add id as hidden field
            $form->addElement(new PFBC\Element\Hidden('id',$page->id));
            
            //Fill the form with default values
           $form->setValues(array(
               'key'=>$page->key,
               'type'=>$page->type,
               'title'=>$page->title,
               'data'=>$page->data,
               'author'=>$page->author
           ));
           
        //If action is process, save the form
        } else if ($action == 'process' && PFBC\Form::isValid("content_edit", false)) {
            //Create the content object
            if(isset($_POST['id'])) {
                $content = Content::find($_POST['id']);
                $form->addElement(new PFBC\Element\Hidden('id',$content->id));
                $content->updated = date("Y-m-d H:i:s");
            } else {
                $content = new Content();
            }
            
            
            //The key contains only alpha numeric characters
            $content->key = preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['key']);
            $content->type = ($_POST['type'] != 'blog') ? 'page' : 'blog';
            $content->title = filter_input(INPUT_POST, 'title',FILTER_SANITIZE_STRING);
            $content->data = Filtering::clean_html($_POST['data']);
            $content->author = filter_input(INPUT_POST, 'author',FILTER_SANITIZE_STRING);
            $content->user_id = $user->id;

            //Check if key already exists
            if ($content->find(array('conditions'=>array("key = ? AND id != ?",$content->key,$content->id))) == false) {

                if ($content->save()) {
                    PFBC\Form::clearErrors("content_edit");
                    PFBC\Form::clearValues("content_edit");
                    $this->flash('message', $content->title . ' har sparats');
                    $this->response()->redirect(url('content/all'));
                    exit();
                } else {
                    PFBC\Form::setError('content_edit', i18n('error_publish'));
                }
            } else {
                PFBC\Form::setError('content_edit', i18n('error_page_exists'));
            }
        }
        
        
        $out['form'] = $form;
        $this->response->body($this->render('content/edit.html.twig', $out));
    }

    /**
     * Shows a page by the given key
     * @param type $key
     */
    public function page($key = null) {
        
        //If no key is given go to start page
        if($key==null) {
            $this->response->redirect(url('/'));
                exit();
        }
        $page = Content::find_by_key($key);
        //If page not found, render a 404 page
        if(!$page) {
            $this->response->body($this->render('content/page_not_found.html.twig',array()));
        } else {
           $out['page'] = $page;
            $this->response->body($this->render('content/page.html.twig',$out)); 
        }
    }
    
    /**
     * Shows the blog
     */
    public function blog() {
        $blog = Content::all(array('conditions'=>"type = 'blog'"));
        $out['blog'] = $blog;
        $this->response->body($this->render('content/blog.html.twig',$out));
    }
}

?>
