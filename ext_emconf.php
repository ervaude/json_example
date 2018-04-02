<?php

$EM_CONF[$_EXTKEY] = [
    'title'              => 'JSON Example',
    'description'        => 'An example extension showing the opportunities of th JSON view.',
    'category'           => 'plugin',
    'shy'                => false,
    'version'            => '2.0.0',
    'state'              => 'stable',
    'uploadfolder'       => 0,
    'createDirs'         => '',
    'clearcacheonload'   => true,
    'author'             => 'Daniel Goerz',
    'author_email'       => 'ervaude@gmail.com',
    'author_company'     => 'Lightwerk GmbH',
    'constraints'        => [
        'depends'   => [
            'typo3' => '8.6.0-9.99.99'
        ],
        'conflicts' => [],
        'suggests'  => []
    ],
    'autoload' => [
        'psr-4' => [
            'DanielGoerz\\JsonExample\\' => 'Classes',
        ]
    ]
];
