<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Powermail',
    'description' => 'This extension provides way to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Oskar Dydo',
    'author_email' => 'extensions@macopedia.pl',
    'category' => 'fe',
    'internal' => '',
    'version' => '2.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'frontend' => '9.5.0-10.4.99',
            'powermail' => '^7.4',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];