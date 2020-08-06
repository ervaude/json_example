<?php

defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'json_example',
    'json_tag',
    [
        DanielGoerz\JsonExample\Controller\TagController::class => 'list, show',
    ]
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'json_example',
    'json_post',
    [
        DanielGoerz\JsonExample\Controller\PostController::class => 'list, show',
    ],
    []
);
