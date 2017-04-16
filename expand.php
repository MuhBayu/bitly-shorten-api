<?php
header('Content-type:application/json');
header('Access-Control-Allow-Origin: *'); 	
require_once('api-lib/Bitly_API.php');

$short_Url = 'http://bit.ly/2ozR9Hn';

$_CLASS = new Bitly_API();
$_CLASS->setAuthID('YOUR_ACCOUNT_ID'); 		// Masukan ID Akun bitly kalian disini
$_CLASS->setApiKey('YOUR_API_KEY'); 		// Masukan API_KEY kalian disini
$_CLASS->setSSL(true);						// SSL_VERIFY
$_CLASS->setFormat('json');					// OUTPUT FORMAT

echo $_CLASS->expandURL($short_Url);

?>