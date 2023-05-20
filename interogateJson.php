<?php
require 'vendor/autoload.php';
use \WpOrg\Requests\Requests;

$response = Requests::get('http://localhost:4000/judete');

echo $response->body;
?>
