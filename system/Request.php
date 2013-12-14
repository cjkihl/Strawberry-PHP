<?php
/**
 * The Request object is responsible for handling input and requests
 * from the client and make it available for the controller.
 * 
 * The request object has a lot of handy methods for 
 * check request method, ajax-requests, actions, variables from the
 * request string, check encodeing etc
 * 
 * @package System
 * @author Carl-Johan Kihl
 * @since 2013-08-14
 */
class Request {
	
	protected $controller;
	protected $action;
	protected $params;
        protected $get;
	protected $name;
	
        /**
         * Constructs a new request
         * 
         * @param string $controller The controller to be called
         * @param string $action The action to be performed
         * @param array $params Extra nameless parameters from url
         * @param array $get All GET variables from the routing systm
         * @param type $name The name of this routing rule
         */
	function __construct($controller,$action,$params,$get, $name) {
		$this->controller = $controller;
                $this->action = $action;
		$this->params = $params;
                $this->get = $get;
		$this->name = $name;
	}
	
	/**
	 * @return string Get action
	 */
	public function action() {
		return $this->action;
	}

	/**
	 * @return string Get controller
	 */
	public function controller($controller = null) {
                if($controller == null) return $this->controller;
		$this->controller = $controller;
	}
	
	/**
	 * @return string Get name
	 */
	public function name() {
		return $this->name;
	}
	
	/**
	 * Get varaibles from routing system
	 * @param string $params if is set it will return the parameter 
	 * else it return all parameters
	 * @param string $default Default value if the key does not exists
	 */
	public function get($key = null, $default = null) {
		if($key===null) return $this->get;
		else {
			return isset($this->get[$key]) ? $this->get[$key] : $default;
		}
	}
        
        /**
         * Get the url parameters by index or all
         * @param number $index if not set, all pareters is returned in an array
         * @param string $default Default value if the index does not exists
         */
	public function params($index = null, $default = null) {
            if($index===null) return $this->params;
		else {
			return isset($this->params[$index]) ? $this->params[$index] : $default;
		}
        }
        
	public function encoding($val=null) {
		if($val==null) return config('site_charset');
		config('site_charset',$val);
		return $this;
	}
	
	/**
	 * Gets the request method, or checks it against $is - e.g. method('post') => true
	 * @param string $is check against request method
	 * @return boolean|Ambigous <string, boolean>
	 */
	public function method($is = null) {
		$method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
		if (null !== $is) {
			return strcasecmp($method, $is) === 0;
		}
		return $method;
	}
	
	/**
	 * Check if the request is an ajax request
	 */
	public function isAjax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
		strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
	}
	
	/**
	 * Get a request header
	 * @param string $key The header key
	 * @param string $default Default-value id the key does not exists
	 * @return string header
	 */
	public function header($key, $default = null) {
		$key = 'HTTP_' . strtoupper(str_replace('-','_', $key));
		return isset($_SERVER[$key]) ? $_SERVER[$key] : $default;
	}
	
	/**
	 * Gets a session variable associated with the request
	 */
	public function session($key, $default = null) {
		startSession();
		return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
	}
	
	/**
	 * Gets a post variable associated with the request
	 */
	public function post($key, $default = null) {
		return isset($_POST[$key]) ? $_POST[$key] : $default;
	}
	
	/**
	 * Get a request cookie
	 * @param string $key The cookie key
	 * @param string $default Default-value id the key does not exists
	 * @return string cookie
	 */
	public function cookie($key, $default = null) {
		return isset($_COOKIE[$key]) ? $_COOKIE[$key] : $default;
	}
	
	/**
	 * Gets the request IP address
	 */
	public function ip() {
		return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
	}
	
	/**
	 * Gets the request user agent
	 */
	public function userAgent() {
		return isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
	}
	
	/**
	 * Gets the request URI
	 */
	public function uri() {
		return isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
	}
	
	/**
	 * Get browsers last cache timestamp
	 */
	public function ifModifiedSince() {
		return isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : '';
	}
	
	public function lang() {
		return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	
	public function authUser() {
		return isset($_SERVER['PHP_AUTH_USER']) ? $_SERVER['PHP_AUTH_USER'] : '';
	}
	
	public function authPassword() {
		return isset($_SERVER['PHP_AUTH_PW']) ? $_SERVER['PHP_AUTH_PW'] : '';
	}
        
        /**
         * Get a server variable
         * @param string $key
         */
        public function server($key=null) {
            if($key == null) return $_SERVER;
            else return $_SERVER[$key];
        }
}