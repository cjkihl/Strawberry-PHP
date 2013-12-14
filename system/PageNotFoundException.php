<?php
/**
 * Page Not found exceptions is thrown by the router if 
 * a controller or page can't be found
 */
class PageNotFoundException extends Exception {
	
	function __construct($message = '',$code = 404,$previous  = null) {
		parent::__construct($message,$code,$previous);
	}
}