<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Go To Backend',
    'description' => 'Add a button in Admin Panel to jump from a frontend page into the according backend area',
    'category' => 'misc',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'state' => 'experimental',
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'adminpanel' => '10.4.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\GoToBackend\\' => 'Classes']
    ],
];