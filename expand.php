<?php
header('Content-type:application/json');
header('Access-Control-Allow-Origin: *'); 	
require_once('api-lib/Bitly_API.php');

$short_Url = 'http://bit.ly/2ozR9Hn';

$bitly = new Bitly_API();
$bitly->setAuthID('YOUR_ACCOUNT_ID'); 	// Masukan ID Akun bitly kalian disini
$bitly->setApiKey('YOUR_API_KEY'); 		  // Masukan API_KEY kalian disini
$bitly->setSSL(true);						        // SSL_VERIFY
$bitly->setFormat('json');				  	  // OUTPUT FORMAT

echo $bitly->expandURL($short_Url);

?>
