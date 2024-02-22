<?php
return function ($page) {
    $notes = $page->children()->published()->flip();;

    if ($tag = param('tag')) {
        $notes = $notes->filterBy('tags', $tag, ',');
    }

    return [
        'tag'   => $tag,
        'notes' => $notes
    ];
};
