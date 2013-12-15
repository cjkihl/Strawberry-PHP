<?php 
/***************************************************************************
//                       Welcome to Srawberry PHP
//                     author: Carl-johan Kihl 2013
//***************************************************************************

//***************************************************************************
//                       Set important constants
//***************************************************************************
/**
 * Path to system folder
 */
define('SYS_PATH',dirname(__FILE__).'/system');
/**
 * Path to application folder
 */
define('APP_PATH',dirname(__FILE__).'/app');
/**
 * Handy constant for the present url
 */
define('THIS_URL',"http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);


//Check if installation file exists if so load it instead
if(file_exists(dirname(__FILE__).'/install.php')) {
    require 'install.php';
    exit();
}

//***************************************************************************
//                       Load and set configurations
//***************************************************************************
require_once SYS_PATH.'/Config.php';
require_once APP_PATH.'/Config.php';
if($config['debug']) {
    //Set error reporting
    error_reporting(-1);
    ini_set('display_errors', 1);
}
//Set system timezone
date_default_timezone_set($config['system_timezone']);

//***************************************************************************
//                  Load Language and Internationalisation
//***************************************************************************
require_once SYS_PATH.'/Language.php';

//***************************************************************************
//                              Load Security
//***************************************************************************
require_once SYS_PATH.'/Authorization.php';
Authorization::init('sqlite:'.dirname(__FILE__).'/'.$config['db_name'].'.sqlite');


//***************************************************************************
//                      Load database, models and sources
//***************************************************************************
require_once SYS_PATH.'/lib/php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg) use ($config)
{
	$cfg->set_model_directory(config('model_path'));
	$cfg->set_connections(array(
			'development' => 'sqlite://'.$config['db_name'].'.sqlite',
			'production' => 'sqlite://'.$config['db_name'].'.sqlite'));
});


//***************************************************************************
//                Load controller routing, request and response
//***************************************************************************
require_once SYS_PATH.'/Controller.php';
require_once SYS_PATH.'/Request.php';
require_once SYS_PATH.'/Response.php';
require_once SYS_PATH.'/PageNotFoundException.php';
require_once SYS_PATH.'/Router.php';


//***************************************************************************
//                         Load other dependencies
//***************************************************************************
require_once SYS_PATH.'/lib/Twig/Autoloader.php';
require_once(SYS_PATH.'/lib/PFBC/Form.php');
require_once SYS_PATH.'/Filtering.php';

//***************************************************************************
//                          Start routing system
//***************************************************************************
$router = new Router();
try {
$router->route();
} catch(PageNotFoundException  $e) {
    //Print the stacktrace here if you want to debug the router
    
    //Route to the not found controller
    $router->route404NotFound();
    
}

exit();