<?php
return function ($page) {
    // only select shorts not older than 6 months
    $shorts = $page->children()->published()->filterBy('date', '>=', date('Y-m-d', strtotime('- 6 months')))->flip();

    return [
        'shorts' => $shorts
    ];
};
