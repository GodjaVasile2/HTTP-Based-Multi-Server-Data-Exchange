<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);

    $dom->loadHTMLFile($url);
    libxml_clear_errors();

    $xpath = new DOMXpath($dom);

    $jsonScript = "";
    $scriptTags = $xpath->query('//script[@type="application/ld+json"]');

    foreach ($scriptTags as $scriptTag) {
        $scriptContent = $scriptTag->nodeValue;
        if (strpos($scriptContent, '@context') !== false && strpos($scriptContent, 'Movie') !== false) {
            $jsonScript = $scriptContent;
            break;
        }
    }

    $data = json_decode($jsonScript, true);

    $movieTitle = $data['name'];
    $actors = array_column($data['actor'], 'name');
    $genres = $data['genre'];
    $imageUrl = $data['image'];


    
    $responseData = array(
        'movieTitle' => $movieTitle,
        'actors' => $actors,
        'genres' => $genres,
        'imageUrl' => $imageUrl
    );

 
    header('Content-Type: application/json');
    echo json_encode($responseData);
}
?>
