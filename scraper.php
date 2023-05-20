<?php
session_start();

$dom = new DOMDocument();
libxml_use_internal_errors(true);

$dom->loadHTMLFile("https://ro.wikivoyage.org/wiki/Jude%C8%9Bele_Rom%C3%A2niei");
libxml_clear_errors();

$xpath = new DOMXpath($dom);

$rows = $xpath->query("//table[contains(@class, 'wikitable')]/tbody/tr[position()<=4]");
$data = array();
foreach ($rows as $row) {
    $cells = $xpath->query('td', $row);
    
    $judet = "";
    $populatie = "";
    
    $coloana = 1;

    foreach ($cells as $cell) {
        if ($coloana == 2) {
            $judet = trim($cell->nodeValue);
        } elseif ($coloana == 4) {
            $populatie = preg_replace('/\D/', '', trim($cell->nodeValue));        
        } 
        $coloana += 1;
    }
    
    $judet = str_replace(['ț', 'ș', 'ă', 'â','î'], ['t', 's', 'a', 'a','i'], $judet);

    if ($judet != "" && $populatie != "" ) {
        $data[] = array('judet' => $judet, 'populatie' => $populatie);
    }
}

$_SESSION['data'] = $data;

echo json_encode($data);
?>
