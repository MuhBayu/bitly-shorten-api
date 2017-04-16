<?php
header('Content-type:application/json');
header('Access-Control-Allow-Origin: *'); 	
require_once('api-lib/Bitly_API.php');

$_CLASS = new Bitly_API();
echo $_CLASS->showParameters();

?>