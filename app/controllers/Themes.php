<?php
/**
 * Themes controller: Create/Read/Update and Delete themes
 *
 * @author Carl-Johan
 */
class Themes_controller extends Controller  {
    
    public function __construct(\Request $request, \Response $response) {
        parent::__construct($request, $response);
        
        //Add specific dictionary for content
        addDictionary('themes');
    }
    
    /**
     * Edits the selected theme
     * @param mixed $id Can be 'process' or an theme-id to edit
     */
    public function edit($id) {
        
        //You need to have administrator permission to enter this page
        $user = User::authorize('Admin');
         
        //Check if user has logged in
        if ($user == false) {
            $this->flash('warning', i18n("no_permission_edit_themes"));
            $this->response()->redirect(url('user/login'));
            exit();
        }
        
        //Clear form if there's no post
        if (!$this->request()->method('post')) {
            PFBC\Form::clearErrors("themes_edit");
            PFBC\Form::clearValues("themes_edit");
        }
        
        //Check if form is registered
        if($id=='process' && PFBC\Form::isValid("themes_edit", false)) {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
            if($id && ($theme = Theme::find($id))) {
               $theme->name = filter_input(INPUT_POST, 'name');
               $theme->desc = filter_input(INPUT_POST, 'desc');
               $theme->author = filter_input(INPUT_POST, 'author');
               $params = json_decode($theme->params);
               var_dump($params);
               foreach ($params as $key => $value) {
                 if(isset($_POST['param_'.$key])) {
                     $params->$key->value = $_POST['param_'.$key];
                 }
               }
              $theme->params = $params;
              if($theme->save()) {
                  $this->flash('info', $theme->name.' has been saved');
            $this->response()->redirect(url('themes/all'));
            exit();
              }
            }
            $this->flash('warning', i18n('common_error'));
            $this->response()->redirect(url('themes/all'));
            exit();
        } 
        if(is_numeric($id) && ($theme = Theme::find($id))!=false) {

        //Check if user has logged in
        if ($theme == false) {
            $this->flash('warning', i18n('theme_not_found'));
            $this->response()->redirect(url('themes/all'));
            exit();
        }
        
        //Create form
        $form = new PFBC\Form("themes_edit", url('themes/edit/process'));
        $form->configure(array('prevent' => array('jQuery', 'bootstrap')));
        
        //Create the form elements
        $form->addElement(new PFBC\Element\Textbox('Name:', 'name', array('required' => 1)));
        $form->addElement(new PFBC\Element\TinyMCE('Description:', 'desc', array('required' => 1)));
        $form->addElement(new PFBC\Element\Textbox('Author:', 'author', array('required' => 1)));
        $form->addElement(new PFBC\Element\Hidden('id',$theme->id));
        
        //Set form default values
        $values['name'] = $theme->name;
        $values['desc'] = $theme->desc;
        $values['author'] = $theme->author;

        $params = json_decode($theme->params);
        if($params) {
            //Set param elements and values
            foreach ($params as $key => $value) {
                switch ($value->type) {
                    case 'color':
                        $form->addElement(new PFBC\Element\Color($value->name,'param_'.$key, array('required' => 1)));
                        break;
                    case 'img_url':
                        $form->addElement(new PFBC\Element\Textbox($value->name,'param_'.$key, array('required' => 1)));
                        break;
                    case 'text':
                        $form->addElement(new PFBC\Element\Textbox($value->name,'param_'.$key, array('required' => 1)));
                        break;
                }
                $values['param_'.$key] = $value->value;
            }
        }
        $form->addElement(new PFBC\Element\Button(i18n('register')));
        
        //Fill the form with default values
        $form->setValues($values);
              
        $out['form'] = $form;
        $this->response->body($this->render('themes/edit.html.twig', $out));
        } else {
              $this->response()->redirect(url('themes/all'));
            exit();
         }
    }
    
    /**
     * List all themes and gives the user control to edit,copy,delete and select themes
     * @param String $action Descripes the current action, copy, delete etc
     * @param inte $id The id of the theme to affect
     */
    public function all($action = null,$id = null) {

        //If action is taken
       if($action) {
           if(is_numeric($id) && ($theme = Theme::find($id))==true) {
           
               switch ($action) {
                   case 'copy':
                       //Create the correct name for the copy
                       $s = explode(' #copy_', $theme->name);
                       $name = "$s[0] #copy_".  date('mdHis');
                       
                       //Copy the records in the table
                       Theme::query('INSERT INTO '.$theme->table_name().' (key,name,desc,author,locked,params) '.
                       "SELECT key,'$name','$name',author,0,params FROM ".$theme->table_name().
                       " WHERE id = $id");

                       $this->flash('message', $theme->name.' has been copied');
                       $this->response()->redirect(url('themes/all'));
                       exit();
                       break;
                   
                   case 'delete':
                       $current_id = Theme::getCurrentTheme()->id;
                       $id = $theme->id;
                       
                       //Check if theme is locked and is removeable
                       if(!$theme->locked && $theme->delete()) {
                            
                            //Check if the deleted theme is the sselected theme, if so change to default theme
                            if($current_id == $id) {
                                Theme::setCurrentTheme(Theme::DEFAULT_THEME_ID);
                            }
                            
                            $this->flash('message', $theme->name.' has been deleted');
                            $this->response()->redirect(url('themes/all'));
                            exit();
                            
                       } else {
                            $this->flash('warning', $theme->name.' could not be deleted');
                            $this->response()->redirect(url('themes/all'));
                            exit();  
                       }
                       break;
                   case 'select':
                       
                       //Select the choosen theme
                       Theme::setCurrentTheme($theme->id);
                       $this->flash('message', $theme->name.' has been choosed');
                            $this->response()->redirect(url('themes/all'));
                            exit();  
                       break;
                   default:
                       break;
               }
           }
       }
       
       $out['default_theme'] = Theme::getCurrentTheme();
       $out['themes'] = Theme::all();
       $this->response->body($this->render('themes/all.html.twig', $out));
    }
}

?>
