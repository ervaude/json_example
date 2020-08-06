<?php

$EM_CONF[$_EXTKEY] = [
    'title'              => 'JSON Example',
    'description'        => 'An example extension showing the opportunities of th JSON view.',
    'category'           => 'plugin',
    'version'            => '3.0.0',
    'state'              => 'stable',
    'uploadfolder'       => 0,
    'createDirs'         => '',
    'clearcacheonload'   => true,
    'author'             => 'Daniel Goerz',
    'author_email'       => 'daniel.goerz+github@posteo.de',
    'author_company'     => 'b13',
    'constraints'        => [
        'depends'   => [
            'typo3' => '10.4'
        ],
        'conflicts' => [],
        'suggests'  => []
    ]
];
