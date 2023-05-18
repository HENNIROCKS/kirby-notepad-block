<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('hennirocks/notepad-block', [
    'blueprints' => [
        'blocks/notepad' => __DIR__ . '/blueprints/blocks/notepad.yml',
    ],
    'snippets' => [
        'blocks/notepad' => __DIR__ . '/snippets/blocks/notepad.php',
    ],
]);
