<?php
//*****************************************************************************
//                    Installation of Strawberry PHP
//*****************************************************************************

define('OUTPUT_ERROR', 1);
define('OUTPUT_MESSAGE',0);
define('OUTPUT_SUCCESS',2);

$errors = 0;

/**
 * Runs the diagnosis program
 * @global int $errors
 */
function run() {
    $dir = dirname(__FILE__);
    $result = array();

    clearstatcache();
    
    echo "<table id='table' class='table'>";
    echo "<thead ><tr><th colspan='2'>Strawberry PHP will make a check to see if the environment is setup correctly</th></tr></thead>";
    
    //Check php-version
    $out = '<tr><td>Checking php-version</td><td>';
    if(PHP_VERSION_ID < 50300) {
        $out .= output(OUTPUT_ERROR, "Wrong php version is installed: (".phpversion().") You need at least version 5.3");
    } else {
        $out .= output(OUTPUT_SUCCESS, "You got the right PHP-version installed (".phpversion().")");
    }
    $out .="</td></tr>";
    echo $out;
    
    //Check htaccess file
     $out = '<tr><td>Checking .htaccess file</td><td>';
    if(!is_readable(".htaccess")) {
        $out .= output(OUTPUT_ERROR, "Your .htaccess file is either not readable or supported by your server");
    } else {
        $out .= output(OUTPUT_SUCCESS, "htaccess file is found and is readable");
    }
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Check if database exists..</td><td>';
    if (!file_exists($dir . '/database.sqlite')) {
        $out .= output(OUTPUT_ERROR, "Database: $dir./database.sqlite Not found");
        return;
    }
    $out .= output(OUTPUT_SUCCESS, "OK");
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Set database file permissions to 777..</td><td>';
    
    //Try to set permission automatically
    @chmod($dir . '/database.sqlite', 0777); 
    $permission = substr(decoct(fileperms($dir . '/database.sqlite')), -3);
    if ($permission !== '777') {
        $out .= output(OUTPUT_ERROR, "Wrong permission: $permission, should be 777");
        $out .= "<p>Set the file: <strong>$dir/database.sqlite</strong> permissions to <strong>777</strong></p>";
    } else {
        $out .= output(OUTPUT_SUCCESS, "Database has right permissions (777)");
    }
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Setting permissions on database file directory to 777..</td><td>';
    
    //Try to set permission automatically
    @chmod($dir, 0777); 
    $permission = substr(decoct(fileperms($dir)), -3);
    if ($permission !== '777') {
         $out .= output(OUTPUT_ERROR, "Wrong permission: $permission, should be 777");
         $out .= "<p>Set the directory: <strong>$dir</strong> permissions to <strong>777</strong></p>";
    } else {
        $out .= output(OUTPUT_SUCCESS, "Database directory has right permissions (777)");
    }
    $out .="</td></tr>";
    echo $out;
    
    //Create the cache directory for twig-templates
    $out = '<tr><td>Creating cache directory</td><td>';
    if(!is_dir($dir.'/system/cache/twig')) {
        if(!mkdir($dir.'/system/cache/twig', 0777, true)) {
            $out .= output(OUTPUT_ERROR, "Cache directory <strong>$dir/system/cache</strong> could not be created");
            $out .= "<p>Create the directory manually: <strong>$dir/system/cache</strong></p>";
        } else {
            $out .= output(OUTPUT_SUCCESS, "Cache directory <strong>$dir/system/cache</strong> created");
        }
    } else {
        $out .= output(OUTPUT_SUCCESS, "Cache directory <strong>$dir/system/cache</strong> already exists");
    }
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Setting permissions on cache directory: to 777</td><td>';
    
    //Try to set permission automatically
    @chmod($dir . '/system/cache', 0777); 
    $permission = substr(decoct(fileperms($dir.'/system/cache')), -3);
    if ($permission !== '777') {
         $out .= output(OUTPUT_ERROR, "Wrong permission: $permission, should be 777");
         $out .= "<p>Set the directory: <strong>$dir/system/cache</strong> and all children-directories permissions to <strong>777</strong></p>";
    } else {
        $out .= output(OUTPUT_SUCCESS, "System cache directory has right permissions (777)");
    }
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Set /app/models/navbar.json file permissions to 777..</td><td>';
    
    //Try to set permission automatically
    @chmod($dir . '/app/models/navbar.json', 0777); 
    $permission = substr(decoct(fileperms($dir . '/app/models/navbar.json')), -3);
    if ($permission !== '777') {
        $out .= output(OUTPUT_ERROR, "Wrong permission: $permission, should be 777");
        $out .= "<p>Set the file: <strong>$dir/app/models/navbar.json</strong> permissions to <strong>777</strong></p>";
    } else {
        $out .= output(OUTPUT_SUCCESS, "Database has right permissions (777)");
    }
    $out .="</td></tr>";
    echo $out;
    
    //Check all installed modules
    $out = '<tr><td>Checking installed modules..</td><td>';
    if ($handle = opendir($dir.'/app/controllers')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $out .= output(OUTPUT_SUCCESS,$entry);
        }
    }
    closedir($handle);
    } else {
        $out .= output(OUTPUT_ERROR, 'Could not read directory:'.$dir.'/app/controllers');
    }
    $out .="</td></tr>";
    echo $out;
    
    //Check installed languages
    $out = '<tr><td>Checking installed languages..</td><td>';
    if ($handle = opendir($dir.'/app/lang')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
             $out .= output(OUTPUT_SUCCESS,$entry);
        }
    }
    closedir($handle);
    } else {
         $out .= output(OUTPUT_ERROR, 'Could not read directory:'.$dir.'/app/lang');
    }
    $out .="</td></tr>";
    echo $out;
    
    $out = '<tr><td>Checking installed themes..</td><td>';
    if ($handle = opendir($dir.'/app/themes')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
             $out .= output(OUTPUT_SUCCESS,$entry);
        }
    }
    closedir($handle);
    } else {
        output(OUTPUT_ERROR, 'Could not read directory:'.$dir.'/app/themes');
    }
    $out .="</td></tr>";
    echo $out.'</table>';
    
    global $errors;
    
    if($errors > 0) {
        echo '<hr><p>'.output(OUTPUT_ERROR, "Check the errors above and try to fix them before you continue").'</p>';
        echo "<p> This to ensure your application is going to work secure and properly</p>";
    } else {
        echo output(OUTPUT_SUCCESS,"Congratulations! Your system seems to be ready for Strawberry PHP!");
    }
}

/**
 * Outputs messages in apsecified format
 * @global int $errors 
 * @param int $status Message-status
 * @param string $message
 * @return string Formatted message
 */
function output($status,$message) {
    if($status===OUTPUT_ERROR) {
        global $errors;
        $errors++;
        return "<span class='alert alert-error'>$message</span>";
    } else if($status === OUTPUT_MESSAGE) {
        return "<span class='alert alert-info'>$message</span>";
    } else if($status === OUTPUT_SUCCESS) {
        return "<span class='alert alert-success'>$message</span>";
    }
}

if($_POST['delete-installer']) {
    @unlink(dirname(__FILE__).'/install.php');
    header( 'Location: '.$_SERVER['PHP_SELF'] );
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Installation of Strawberry PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="{{url('favicon.ico')}}" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <style type="text/css">
            #table tr td { padding: 1em;}
            #table tr td span.alert { margin: 10px; padding: 2px;}
            #table tr td p {font-size: small; color: #777; margin:10px; }
        </style>
    </head>
     <body>
        <!--[if lt IE 7]>
                    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="row">
                <div class="span8">
                    <article>
                        <h1><img src="img/strawberry-icon.png">Welcome to Strawberry PHP!<img src="img/strawberry-icon.png"></h1>
                    <hr>
                    <?php run();?>  
                    <hr>
                    <h1>Before you start using Strawberry PHP, please read this carefully:</h1>
                    <br>
                    <h4><img src="img/strawberry-icon.png">Set your default configurations!</h4>
                    <p>Usually no configurations needs to be done to run your application. However if you application
                        exists in another directory than the root-directory of your web-server, you need to set the <strong>BASE_URL</strong> constant</p>
                    <ul>
                        <li>Open the file: <strong><?php echo dirname(__FILE__)?>/app/Config.php</strong></li>
                        <li>Read the description on the first statement in the file and set your <strong>BASE_URL</strong></li>
                        <li>For example: If the url to your index.php file is <i>http://www.yoursite.com/an/extra/path/index.php</i>
                            you need to set the the <strong>BASE_URL</strong> to <i>'an/extra/path'</i></li> without backslash in the end.
                    </ul>
                    <br>
                    <h4><img src="img/strawberry-icon.png">Make your application safe!</h4>
                    <p>Your authorization-system has three default logins installed:</p>
                    <ul>
                        <li>Admin - Email: admin@admin.com Password: admin</li>
                        <li>Writer - Email: writer@writer.com Password: writer</li>
                        <li>User - Email: user@user.com Password: user</li>
                    </ul>
                    <p>
                    Use these logins only to explore the different areas in your freshly installed application. As soon as possible you
                    should create you own account with a safe password and delete those default-logins before publishing you site.
                    your site!
                    </p>
                    <br>
                    <h4><img src="img/strawberry-icon.png">Check your <i>.htaccess</i> file in the root directory!</h4>
                    <p>Strawberry PHP have an <i>.htaccess</i> file that is located in the root directory. It is used to make good-looking, SEO-friendly
                    url's. If your application does not work properly and the site-url's can't be found. This file may be the source to the problem.
                    Make sure your server has the rewrite-engine turned On. Some web-servers also need to set the <i>rewritebase-property</i>. See the <i>.htaccess</i> file
                    for more information.
                    </p>
                    <br>
                    <h4><img src="img/strawberry-icon.png">Delete this file!</h4>
                    <p>After you have tried your application and everything is working properly you must delete this file (<strong><?php echo __FILE__?></strong>) for security reasons as it exposes vital-information about you system.</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                        <button class="btn btn-primary" type="submit" name="delete-installer" value="true"> <i class="icon icon-trash"></i>Click here to delete this installer</button>
                    </form>
                    <hr>
                    <h4>Then everything's good to go </h4>
                    <h1>Enjoy Strawberry PHP!</h1>
                    <br>
                    <p><i>Best regards:</i></p>
                    <address>
                    <strong>/ The Strawberry PHP Team</strong><br>
                    Carl-Johan Kihl 2013<br>
                    <a href="https://github.com/caki0915/Strawberry-PHP">Strawberry PHP on github</a><br>
                    </address>
                    </article>
                </div>
            </div>
        </div>
     </body>
</html>