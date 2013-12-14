<?php
/**
 * The user controller contains all functionality and pages 
 * for login logout register etc
 * 
 * @author Carl-Johan
 */
class User_controller extends Controller {

    public function __construct(\Request $request, \Response $response) {
        parent::__construct($request, $response);
        
        //Add specific dictionary for content
        addDictionary('user');
    }
    
    /**
     * Register a new user, only for authorized admin
     */
    public function register($action = null,$arg1 = null) {

        if(!User::authorize("Admin")) {
            $this->login();
            return;
        }
        
        $groups = Usergroup::all();
        $group_select = array();
        
        foreach ($groups as $g) {
            $group_select[$g->id] = $g->name;
        }

        //Clear form is there's no post
        if (!$this->request()->method('post')) {
            PFBC\Form::clearErrors("register");
            PFBC\Form::clearValues("register");
        }

        //Action delete
        if($action == 'delete') {
            if(is_numeric($arg1)) {
                $user = User::find($arg1);
                $user->delete();
                $this->flash('message', $user->name." has been deleted");
                $this->response()->redirect(url('user/register'));
            }
        }
        
        else if ($action == 'process' && PFBC\Form::isValid("register", false)) {
            if ($_POST['password'] == $_POST['password2']) {
                if (User::find_by_email($_POST['email']) == null) {

                    //Create user
                    $user = new User();
                    $user->email = $_POST['email'];
                    $user->password = $_POST['password'];
                    $user->name = $_POST['name'];
                    $user->usergroup_id = $_POST['usergroup_id'];
                    
                    //Verify save
                    if ($user->save()) {
                        PFBC\Form::clearErrors("register");
                        PFBC\Form::clearValues("register");
                        $this->flash('message', $user->name.' has been created');
                        $this->response()->redirect(url('user/register'));
                        exit();
                    } else {
                        PFBC\Form::setError('register', i18n("error_save"));
                    }
                } else {
                    PFBC\Form::setError('register', i18n("error_email_exists"));
                }
            } else {
                PFBC\Form::setError('register', i18n("error_password_match"));
            }
        }
        
        //Create form
        $form = new PFBC\Form("register", url('user/register/process'));
        $form->configure(array('prevent' => array('jQuery', 'bootstrap')));
        $form->addElement(new PFBC\Element\Email(i18n('email'), 'email', array('required'=>1)));
        $form->addElement(new PFBC\Element\Textbox(i18n('name'), 'name', array('required'=>1)));
        $form->addElement(new PFBC\Element\Password(i18n('password'), 'password', array('required'=>1)));
        $form->addElement(new PFBC\Element\Password(i18n('password'), 'password2', array('required'=>1)));
        $form->addElement(new PFBC\Element\Select(i18n('usergroup'), 'usergroup_id', $group_select));
        $form->addElement(new PFBC\Element\Button(i18n('register')));
        $out['form'] = $form;
        $out['users'] = User::all();
        
        $this->response->body($this->render('user/registration.html.twig', $out));
    }

    /**
     * Login form an functinality
     */
    public function login($action=null) {
        
        if($action=='process') {
            
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!$email)throw new Exception('Invalid email');
            
            $password = filter_input(INPUT_POST, 'password');
            if(!$password) throw new Exception('Enter password');
            
            try {
                User::login($email, $password);
                $this->flash('message',i18n('login_success'));
                $this->response()->redirect(url('user/login'));
                
            } catch (Exception $e) {
                $this->flash('error',$e->getMessage());
                $this->response()->redirect(url('user/login'));
                }
        }
        
        $this->response->body($this->render('user/login.html.twig'));
    }
    
    /**
     * Shows the login page with a flash messages
     */
    public function logout() {
        User::logout();
        $this->flash("message", i18n('logout_success'));
        $this->response()->redirect(url("user/login"));
        exit();
    }

    /**
     * Debug function creates alla neccesary tables
     */
    public function createtables() {
        Authorization::getInstance()->createTables();
    }
}
?>