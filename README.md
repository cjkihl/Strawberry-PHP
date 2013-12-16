Strawberry-PHP
==============

##A strawberry-powered MVC- and  CMS- framework for PHP and SQLite##

Strawberry PHP is PHP-framework and MVC for creating 
web-applications and websites in an instant. 
Strawberry PHP uses a flexible yet fast framework that
assist you in the procces by making adapters to common functionality for
making requests and responses in HTML and PHP. It have never been easier to 
make AJAX-rpc requests, force downloads, read HTTP-headers and use HTTP-Authorization!

**Strawberry PHP** also comes bundled with a lot of modules for creating forms, 
authorization usergroups and web-mangement, Content- and blog- mangement and much more!

##Features:##

* Dynamic HTTP-Routing och [SEO Search engine friendly Url's](http://en.wikipedia.org/wiki/Clean_URL)
* Expandlable [MVC structure](http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)
* Logical flow and abstraction http-request and responses
* Dynamic models with [PHP-ActiveRecord](http://www.phpactiverecord.org/)!
* [Internationalisation(i18n)](http://en.wikipedia.org/wiki/Internationalization_and_localization) support for creating multi-language applications!!
* Support for easy templates med [Twig Template Engine](http://twig.sensiolabs.org/)!
* Authorization and Security module with usergroups and permissions
* Theme-rendering module for styling and making custom templates easier
* Content-module for create/read/update & delete content and blogs to you application
* And much more!

##Installation instructions##

* Download the latest release and put it on your server
* Set your browser to the url where you installed the application. The installation starts.
  The installation will run some test and analyse your web- server to see if it supports Strawberry PHP.
  It will then try to set the correct file-permissions, create cache directories, check database, installed modules etc.
* Follow the instructions in the installer carefully and you can can start using **Strawberry-PHP** :)


**FAQ**

**Problem:**        None of the links doesn't work and I can't access any pages on my site!

**Solution 1:**    Check your configurations in the file: _app/Config.php_. Check if the first constant: _BASE_URL_
                    is set to you path to Strawberry-PHP on the web-server.
                    
**Solution 2:**    Check if your _.htaccess_ file in the root-directory is set correctly. 
                    Make sure the rewrite-engine is supported by your server, and thet _Rewrite-base_ is set correclty.

**Problem**         No style-sheets or images is loaded and everything looks like a mess!

**Solution**        The links to style-sheets and images uses the **BASE_URL** constant in
                    **app/Config.php** to find the sources. Set this constant correct and try again. See the Api-docs **docs/api**                      on how to set the **BASE_URL** constant correctly. 

#How to use Strawberry PHP#

##Add your first account:##
1. Login with email: **admin@admin.com** and password: **admin**
2. In the dropdown-menu in the top-right of the site choose _Manage users_
3. In the User-editor fill in the form, choose _admin_ as usergroup and click register.
4. Now you have a new account. In the click _dropdown-menu -> logut_ and login to your new account.
5. Go to _dropdown-menu -> Manage users_ and remove the default users to make your site secure!

##Create your own theme##
1. Login with your user-account
2. Go to _dropdown-menu -> Change Theme_
3. Now you see a list of all default themes along with a few buttons.
4. Click the + sign at the end of the row of the theme _Espacio Standard-light_
5. Now you have made a new copy of the theme _Espacio Standard-light_. You find it at the end of the list.
6. Click on the green button with the pen on, to edit your newly created theme.
7. Now you are in the theme-editor. Change your theme-name to something else than _Espacio Standard-light #copy.._
8. Feel free to change the themes description, colors and icons as you wish. If you change the icon or background, make shure an image with that name exists in the folder _img/themes/espacio_.
9. Click register to save you theme and go back to the Theme-chooser. Click the heart-button beside your theme to choose it.

##Create a new page##
1. Login with your user-account
2. Go to _dropdown-menu -> Manage Pages_
3. Now you see a list of all pages and blogposts in the system. Click the blue _New Page_ button at the top.
4. Now you are in the page-editor. Choose an alias for your page. The alias can be the same as the title but all spaces and special-character will be stripped away. With this alias, you can reach your page through the url string. For example: if you set the alias to _My new page :)_ The alias will be saved as _mynewpage_ and if your site has the domain www.mysite.com you can reach your new page by typing _www.mysite.com/content/pages/mynewpage_
5. Choose the type of your article, If you choose Blogpost your article will be visible in the blog.
6. Write your article in the editor. Here you have an editor where you can format your text as you want it.
7. Click register. Now you see your new page at the bottom of the list. Click the name to view the page. You can edit it again by clicking the green pen, or remove it by clicking the red trashcan. You can click the orange button to unpublish/publish your site **Not yet implemented**

##Add a menu-link to you page##
1. Login with your user-account
2. Go to _dropdown-menu -> Edit Menu_
3. Now you see the menu editor. At first it can look a bit complicated but you will find it come very handy. It's a representation of the whole meny-hierachy of the site. Click on each node to unfold it and see it's content.
4. Click on the node _top navbar_. It represents the top menu
5. At the start of the row _Fist TestPage_ you have two buttons. With the first one you can drag and drop the menu-options up and down in the list, and the second one shows the context-menu of that node.
6. Open the context-menu of the node _Fist TestPage_. Click _Append_
7. Now you get a new empty node after _First TestPage_. This is your new link! Click the first field named _field_ and write the name of your link etc. _My New Page_
8. In the field named _value_, write the short url to you page etc. _content/pages/mynewpage_
9. Click the save button. If you get an error you probably don't have permission to save the file _app/models/nabar.json_. Set the persmission of _app/models/nabar.json_ to _777_ and try again.
10. Now you new menu-button appears in the top-menu! Click it to see you page. 
11. If you mess it up when you editing your menues, press the undo-button at the top of the menu-editor.

##Create you own Model-View-Controller Module##
1. In the Main module _app/Controllers/Main.php_ There is a controller called _Guestbook_. It's an example controller that shows you how easy it is to extend the framework with you own modules. It has it's own model _app/models/Post.php_. And a view _app/views/main/guestbook.html.twig_ You can access the controller through _www.yoursite.com/guestbook_. Examine how the controller is build and learn the structure of Strawberry-PHP modules! Also Check the api-manual: _docs/api_ for more information.

You can also check the developers manual:
https://github.com/caki0915/Strawberry-PHP/wiki/Developers-Manual

