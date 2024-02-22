<?php
$options = [
    'title'       => 'Aktuelle Notes',
    'description' => 'Aktuelle Notes von djdn.de',
    'link'        => 'notes'
];
echo page('notes')->children()->listed()->flip()->limit(10)->feed($options);
