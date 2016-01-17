<?php
namespace DanielGoerz\JsonExample\Mvc\View;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Extbase\Mvc\View\JsonView as ExtbaseJsonView;

/**
 * Class JsonView
 *
 * @author Daniel Goerz <ervaude@gmail.com>
 */
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
                    'tagsArray' => [
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
                'tagsArray' => [
                    '_descendAll' => [
                        '_only' => ['uid']
                    ]
                ]
            ]
        ]
    ];
}
