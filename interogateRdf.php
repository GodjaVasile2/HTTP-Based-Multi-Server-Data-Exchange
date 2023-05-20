<?php
require 'vendor/autoload.php';

$client = new EasyRdf\Sparql\Client("http://localhost:8080/rdf4j-server/repositories/grafexamen");
$interogare = "
    PREFIX : <http://vosi.ro#> 
    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
    SELECT ?judet ?populatie
    WHERE {
       ?s rdfs:label ?judet.
       ?s :hasPopulation ?populatie.
    }";


$rezultat = $client->query($interogare);

$data = [];
foreach ($rezultat as $row) {
    $data[] = [
        'judet' => (string)$row->judet,
        'populatie' => (string)$row->populatie
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
?>
