<?php
session_start();

require 'vendor/autoload.php';
use \WpOrg\Requests\Requests;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];

    $options = array(
        'timeout' => 20,
        'headers' => array(
            'Content-Type' => 'application/json'
        )
    );

    foreach ($data as $item) {
        $url = 'http://localhost:4000/judete';
        $response = Requests::post($url, $options, $item);
    }
}
?>
