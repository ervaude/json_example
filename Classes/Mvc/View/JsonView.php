<?php
declare(strict_types=1);
namespace DanielGoerz\JsonExample\Mvc\View;

/*
 * This file is part of TYPO3 CMS-based extension json_example by Daniel Goerz.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Extbase\Mvc\View\JsonView as ExtbaseJsonView;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class JsonView extends ExtbaseJsonView
{
    /**
     * @var array
     */
    protected $configuration = [
        'tags' => [
            '_descendAll' => [
                '_exclude' => ['pid'],
            ]
        ],
        'tag' => [
            '_exclude' => ['pid'],
        ],
        'posts' => [
            '_descendAll' => [
                '_exclude' => ['pid'],
                '_descend' => [
                    'tags' => [
                        '_descendAll' => [
                            '_only' => ['uid']
                        ]
                    ]
                ]
            ]
        ],
        'post' => [
            '_exclude' => ['pid'],
            '_descend' => [
                'tags' => [
                    '_descendAll' => [
                        '_only' => ['uid']
                    ]
                ]
            ]
        ]
    ];

    /**
     * Transforming ObjectStorages to Arrays for the JSON view
     *
     * @param mixed $value
     */
    protected function transformValue($value, array $configuration): array
    {
        if ($value instanceof ObjectStorage) {
            $value = $value->toArray();
        }
        return parent::transformValue($value, $configuration);
    }
}
