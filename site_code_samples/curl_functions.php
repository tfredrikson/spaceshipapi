<?php
/*
Sean Huber CURL library
http://www.php.net/manual/en/ref.curl.php#65700

----
MODIFICATIONS:
TJF 2013-06-22 modified to make output_header configurable
TJF 2013-06-22 modified to add PUT, DELETE, ERROR (not completed, just framework)
----


This library is a basic implementation of CURL capabilities.
It works in most modern versions of IE and FF.

==================================== USAGE ====================================
It exports the CURL object globally, so set a callback with setCallback($func).
(Use setCallback(array('class_name', 'func_name')) to set a callback as a func
that lies within a different class)
Then use one of the CURL request methods:

get($url);
post($url, $vars); vars is a urlencoded string in query string format.

Your callback function will then be called with 1 argument, the response text.
If a callback is not defined, your request will return the response text.

FROM http://php.net/manual/en/function.curl-setopt.php
The full data to post in a HTTP "POST" operation. To post a file, prepend a filename with @ and use the full path. The filetype can be explicitly specified by following the filename with the type in the format ';type=mimetype'. This parameter can either be passed as a urlencoded string like 'para1=val1&para2=val2&...' or as an array with the field name as key and field data as value. If value is an array, the Content-Type header will be set to multipart/form-data. As of PHP 5.2.0, value must be an array if files are passed to this option with the @ prefix. As of PHP 5.5.0, the @ prefix is deprecated and files can be sent using CURLFile.


*/

class CURL {
    var $callback = false;

	function setCallback($func_name) {
		$this->callback = $func_name;
	}

	function doRequest($method, $url, $vars, $output_header = false) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, $output_header);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		if ($method == 'POST') {
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
		}
		$data = curl_exec($ch);
		curl_close($ch);
		if ($data) {
			if ($this->callback)
			{
				$callback = $this->callback;
				$this->callback = false;
				return call_user_func($callback, $data);
			} else {
				return $data;
			}
		} else {
			return curl_error($ch);
		}
	}

	function get($url, $output_header = false) {
		return $this->doRequest('GET', $url, 'NULL', $output_header);
	}

	function post($url, $vars, $output_header = false) {
		return $this->doRequest('POST', $url, $vars, $output_header);
	}

	function put($url, $vars, $output_header = false) {
		return 'put not yet complete';
	}

	function delete($url, $vars, $output_header = false) {
		return 'delete not yet complete';
	}

	function error($url, $vars, $output_header = false) {
		return 'error not yet complete';
	}

}
