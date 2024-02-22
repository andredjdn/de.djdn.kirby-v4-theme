<?php

$data = $pages->find('notes')->children()->published()->flip()->limit(25);
$json = [];

foreach ($data as $article) {

    $json[] = [
        'url'   => (string)$article->url(),
        'title' => (string)$article->title(),
        'text'  => (string)$article->text()->toBlocks(),
        'date'  => (string)$article->date()
    ];
}

echo json_encode($json);
