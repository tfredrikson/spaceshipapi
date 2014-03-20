<?php

$debug=0;

include("secret.php") ;

// build the API URL
$api_url = 'http://spaceshipapi.com/api'; // initialized
$server_name = $_SERVER['SERVER_NAME'];
if($debug) { print "[server_name: $server_name]<br />\n"; }

$request_uri = $_SERVER['REQUEST_URI'];
if($debug) { print "[request_uri: $request_uri]<br />\n"; }

if($server_name == 'localhost') {

	$api_url = 'http://localhost/_empire/api';
	$request_uri = str_replace( '_empire/', '', $request_uri );

}

if (strpos( $request_uri, '?') !== FALSE) {

	$api_url .= substr( $request_uri, 0, strpos( $request_uri, '?') );

} else {

	$api_url .= $request_uri;

}
if($debug) { print "[api_url: $api_url]<br />\n"; }

// build the param string
$api_params = "secret=$secret";
$method = $_SERVER['REQUEST_METHOD'];
if($debug) { print "[method: $method]<br />\n"; }

if ($method == 'GET') {

    foreach ($_GET as $key => $value) {
		$api_params .= "&$key=$value";
	}

} elseif ($method == 'POST') {

    foreach($_POST as $key => $value) {
    		$api_params .= "&$key=$value";
	  }

}
if ($debug) { print "[api_params: $api_params]<br />\n"; }

include ("curl_functions.php") ;
$curlObj = new CURL();

switch ($method) {
  case 'PUT':
	$html = $curlObj->put($api_url, $api_params);
    break;

  case 'POST':
	$html = $curlObj->post($api_url, $api_params);
    break;

  case 'GET':
	$html = $curlObj->get("$api_url?$api_params");
    break;

  case 'DELETE':
	$html = $curlObj->delete($api_url, $api_params);
    break;

  default:
	$html = $curlObj->error($api_url, $api_params);
    break;
}


print $html;
exit;
