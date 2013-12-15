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

* Dynamic HTTP-Routing och SEO (Sökmotor-optimering)
* Expandlable MVC structure
* Logical flow and abstraction http-request and responses
* Dynamic models with PHP-active record!
* Internationalisation(i18n) support for creating multi-language applications!!
* Support for easy templates med Twig template engine!
* Authorization and Security module with usergroups and permissions
* Theme-rendering module for styling and making custom templates easier
* Content-module for create/read/update and delete content and blogs to you application
* And much more!

##Installation instructions##

* Download the latest release and put it on your server
* Set your browser to the url where you installed the application to start the installation.
  The installation will run some test and analyse your server to see if it-supports Strawberry PHP.
  If will then try to set the correct file-permissions, create cache directories, check database, installed modules etc.
* Follow the instructions in the installer carefully and you are good to go :)


**FAQ**

**Problem:** When none of the links doesn't work and I can't access any pages on my site!
** Solution 1:**    Check your configurations in the file: **app/Config.php**. Check if the first constant: **BASE_URL**
                    is set to you path to Strawberry-PHP on the web-server.
** Solution 2:**    Check if you **.htaccess** file in the root-directory is correctly set. 
                    Make sure the rewrite-engine is supported by your server, and the Rewrite-base is set correclty.

**Problem** None style-sheets or images is loaded and everything looks like a mess!
**Solution**        The links to style-sheets and images relies upon that the **BASE_URL** constant in
                    **app/Config.php** is set correctly. Set this constant and try again See the Api-docs **docs/api** on
                    how to set the **BASE_URL** constant correctly. 



