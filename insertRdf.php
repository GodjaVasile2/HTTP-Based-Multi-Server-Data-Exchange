<?php
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = $_POST['query'];

$client = new EasyRdf\Sparql\Client('http://localhost:8080/rdf4j-server/repositories/grafexamen/statements');
$client->update($query);

}
?>
