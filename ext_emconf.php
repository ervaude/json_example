<?php

$EM_CONF[$_EXTKEY] = [
    'title'              => 'JSON Example',
    'description'        => 'An example extension showing the opportunities of th JSON view.',
    'category'           => 'plugin',
    'shy'                => false,
    'version'            => '1.1.0',
    'dependencies'       => '',
    'conflicts'          => '',
    'priority'           => '',
    'loadOrder'          => '',
    'module'             => '',
    'state'              => 'stable',
    'uploadfolder'       => 0,
    'createDirs'         => '',
    'modify_tables'      => '',
    'clearcacheonload'   => true,
    'lockType'           => '',
    'author'             => 'Daniel Goerz',
    'author_email'       => 'ervaude@gmail.com',
    'author_company'     => 'Lightwerk GmbH',
    'CGLcompliance'      => null,
    'CGLcompliance_note' => null,
    'constraints'        => [
        'depends'   => [
            'typo3' => '7.5.0-7.99.99'
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
