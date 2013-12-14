<?php

/**
 * HTTP Response object
 * Responsible for sending a HTTP-response back tho the client
 * 
 * Has functionality and helper-methods for creating different kinds of responses
 * like ajax-rpc, force downloading etc.
 * 
 * @package System
 * @author Carl-Johan Kihl
 * @since 2013-08-14
 */
class Response {

    /**
     * @var int $status HTTP status-code
     */
    private $status;

    /**
     * @var array HTTP headers
     */
    private $header;

    /**
     *
     * @var string HTTP body 
     */
    private $body;
    
    /**
     * Constructor
     * @param string $body The HTTP response body
     * @param int    $status The HTTP response status
     * @param array $header The HTTP reponse headers
     */
    public function __construct($status = 200, $header = array()) {
        $this->status = (int) $status;
        $this->header = $header;
    }

    /**
     * Get and set status
     * 
     * If no parameter is given, the status will be returned.
     *  
     * @param  int|null $status
     * @return int
     * @return Response method chaining
     */
    public function status($status = null) {
        if (!is_null($status)) {
            $this->status = (int) $status;
            return $this;
        }

        return $this->status;
    }

    /**
     * Get and set header
     * @param  string      $name  Header name
     * @param  string|null $value Header value
     * @return string      Header value
     * @return Response method chaining
     */
    public function header($name, $value = null) {
        if (!is_null($value)) {
            $this->header[$name] = $value;
            return $this;
        }
        return $this->header[$name];
    }

    /**
     * @return array HTTP headers
     */
    public function headers() {
        return $this->header;
    }

    /**
     * Redirect
     *
     * This method prepares this response to return an HTTP Redirect response
     * to the HTTP client.
     *
     * @param string $url The redirect destination
     * @param int $status The redirect HTTP status code
     * @return Response method chaining
     */
    public function redirect($url, $status = 302) {
        $this->status = $status;
        $this->header['Location'] = $url;
        $this->sendHeaders();
        exit();
    }

    /*
     * Forces browser to reload page
     * 
     * @return Response method chaining
     */
    public function noCache() {
        $this->header('Cache-Control', 'no-cache, must-revalidate');
        $this->header('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        return $this;
    }

    /**
     * Set the HTTP response Content-Type
     * 
     * @param  string   $type   The Content-Type for the Response (ie. text/html)
     * @return Response method chaining
     */
    public function contentType($type) {
        $this->header['Content-Type'] = $type;
        return $this;
    }

    /**
     * Set Expires HTTP response header
     *
     * The `Expires` header tells the HTTP client the time at which
     * the current resource should be considered stale. At that time the HTTP
     * client will send a conditional GET request to the server; the server
     * may return a 200 OK if the resource has changed, else a 304 Not Modified
     * if the resource has not changed. 
     * @param string|int $time If string, a time to be parsed by `strtotime()`;
     *                         If int, a UNIX timestamp;
     * @return Response method chaining
     */
    public function expires($time) {
        if (is_string($time)) {
            $time = strtotime($time);
        }
        $this->header['Expires'] = gmdate(DATE_RFC1123, $time);
        return $this;
    }

    /**
     * Set Last-Modified HTTP Response Header
     *
     * Set the HTTP 'Last-Modified' header and stop if a conditional
     * GET request's `If-Modified-Since` header matches the last modified time
     * of the resource. The `time` argument is a UNIX timestamp integer value.
     * When the current request includes an 'If-Modified-Since' header that
     * matches the specified last modified time, the application will stop
     * and send a '304 Not Modified' response to the client.
     *
     * @param  int $time The last modified UNIX timestamp
     * @throws InvalidArgumentException If provided timestamp is not an integer
     * @return Response method chaining
     */
    public function lastModified($time) {
        if (is_integer($time)) {
            $this->header['Last-Modified'] = date(DATE_RFC1123, $time);
            if ($time === strtotime($this->request->header('IF_MODIFIED_SINCE'))) {
                $this->status(304);
            }
        } else {
            throw new InvalidArgumentException('lastModified only accepts an integer UNIX timestamp value.');
        }
        
        return $this;
    }

    /**
     * Set headers for http server authentication
     * @param type $realm The real to authenticate
     * @return Response method chaining
     */
    public function authentication($realm = 'Restricted area') {
        $this->header['WWW-Authenticate'] = 'Basic realm="' . $realm . '"';
        $this->status(401);
        return $this;
    }

    /**
     * Get message for HTTP status code
     * 
     * @return string|null
     */
    public function getMessageForCode($status) {
        if (isset($this->messages[$status])) {
            return $this->messages[$status];
        } else {
            return null;
        }
    }

    /**
     * Sends the response to the browser
     * 
     * @param string $body HTTP body
     */
    public function send() {
        $this->sendHeaders();
        echo $this->body;
    }

    /**
     * Get or set http body
     * 
     * @param type $body
     * @return \Response method chaining
     */
    public function body($body) {
        if($body==null) return $this->body;
        $this->body = $body; return $this;
    }
    
    /**
     * Set body as a json rpc response (JSON-rpc v 2.0)
     * 
     * @param mixed $result 
     * @param mixed $error
     * @param mixed $id must be the same as the json request id
     * @return \Response method chaining
     */
    public function bodyJsonRpc($result = null, $error = null, $id = 0) {
        
        $rpc = (object) array("jsonrpc" => "2.0", 'id' => $id);
        if ($result !== null)
            $rpc->result = $result;
        if ($error !== null)
            $rpc->error = $error;
        $this->body = json_encode($rpc);
        return $this;
    }

    /**
     * Sends headers to the browser
     * 
     * @return \Response method chaining
     */
    private function sendHeaders() {

        //Send headers
        if (headers_sent() === false) {
            //Send status
            if (strpos(PHP_SAPI, 'cgi') === 0) {
                header(sprintf('Status: %s', $this->getMessageForCode($this->status)));
            } else {
                header(sprintf('%s %s', $_SERVER['SERVER_PROTOCOL'], $this->getMessageForCode($this->status)));
            }

            //Send headers
            foreach ($this->header as $name => $value) {
                $hValues = explode("\n", $value);
                foreach ($hValues as $hVal) {
                    header("$name: $hVal", false);
                }
            }
            if ($this->status() > 399)
                exit();
        }
        
        return $this;
    }

    /**
     * Force download content in browser
     * 
     * @return \Response method chaining
     */
    public function download($contentType = 'text/html', $filename = 'untitled.html', $lenght = null) {
        $this->header['Content-type'] = $contentType;
        $this->header['Content-Disposition'] = 'attachment; filename="' . $filename . '"';
        if ($lenght !== null) {
            $this->header['Content-length'] = $lenght;
        }
        return $this;
    }

    /**
     * @var array HTTP response codes and messages
     */
    public $messages = array(
        //Informational 1xx
        100 => '100 Continue',
        101 => '101 Switching Protocols',
        //Successful 2xx
        200 => '200 OK',
        201 => '201 Created',
        202 => '202 Accepted',
        203 => '203 Non-Authoritative Information',
        204 => '204 No Content',
        205 => '205 Reset Content',
        206 => '206 Partial Content',
        //Redirection 3xx
        300 => '300 Multiple Choices',
        301 => '301 Moved Permanently',
        302 => '302 Found',
        303 => '303 See Other',
        304 => '304 Not Modified',
        305 => '305 Use Proxy',
        306 => '306 (Unused)',
        307 => '307 Temporary Redirect',
        //Client Error 4xx
        400 => '400 Bad Request',
        401 => '401 Unauthorized',
        402 => '402 Payment Required',
        403 => '403 Forbidden',
        404 => '404 Not Found',
        405 => '405 Method Not Allowed',
        406 => '406 Not Acceptable',
        407 => '407 Proxy Authentication Required',
        408 => '408 Request Timeout',
        409 => '409 Conflict',
        410 => '410 Gone',
        411 => '411 Length Required',
        412 => '412 Precondition Failed',
        413 => '413 Request Entity Too Large',
        414 => '414 Request-URI Too Long',
        415 => '415 Unsupported Media Type',
        416 => '416 Requested Range Not Satisfiable',
        417 => '417 Expectation Failed',
        422 => '422 Unprocessable Entity',
        423 => '423 Locked',
        //Server Error 5xx
        500 => '500 Internal Server Error',
        501 => '501 Not Implemented',
        502 => '502 Bad Gateway',
        503 => '503 Service Unavailable',
        504 => '504 Gateway Timeout',
        505 => '505 HTTP Version Not Supported'
    );

}