<?php
    libxml_use_internal_errors(true);
    
    $conteudo = file_get_contents('https://www.y2meta.com/youtube/6pq2z9XqKOU/');
    $documento = new DOMDocument();
    $documento->loadHTML($conteudo);

    $xPath = new DOMXPath($documento);
    $domNodeList = $xPath->query('.//div[@class="form-group has-success has-feedback"]');

    /** @var DOMNode $elemento */
    foreach($domNodeList as $elemento){
        echo $elemento->childNodes . PHP_EOL;
    };
?>