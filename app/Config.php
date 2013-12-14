<?php
/**
 * Configurations for this application
 * @author Carl-Johan Kihl caki10
 */

/**
 * BASE_URL: If your site is on another place that you root you need to set the
 * this constant to the location of your site.
 *  For example: the url to your index.php file is http://www.yoursite.com/an/extra/path/index.php
 * you need to set the the BASE_URL to 'an/extra/path'
 */
//define('BASE_URL',substr($_SERVER['REQUEST_URI'],0, strlen($_SERVER['REQUEST_URI']) -1));
define('BASE_URL','/bth/phpmvc/strawberry-php');
//define('BASE_URL','/~caki10/phpmvc/strawberry-php');

//Enable debugging
$config['debug'] = true;
$config['version'] = 'knom 0.5';
$config['site_charset'] = 'utf-8';
$config['site_title'] = 'Strawberry PHP';

//Defaults
$config['system_timezone'] = 'Europe/Berlin';
$config['default_theme'] = 'espacio';
$config['language'] = 'en-us';

$config['default_controller'] = 'Main';

//Urls
$config['base_url'] = BASE_URL;
$config['site_url'] = 'http://'.$_SERVER['SERVER_NAME'].BASE_URL;

$config['img_url'] = $config['site_url'].'/img';
$config['js_url'] = $config['site_url'].'/js';
$config['css_url'] = $config['site_url'].'/css';

//Paths
$config['controller_path'] = APP_PATH.'/controllers';
$config['model_path'] = 'app/models';
$config['view_path'] = APP_PATH.'/views';
$config['twig_cache_path'] = SYS_PATH.'/cache/twig';
$config['twig_debug'] = true;

//Database name without extension
$config['db_name'] = 'database';