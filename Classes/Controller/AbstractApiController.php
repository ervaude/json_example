<?php
declare(strict_types=1);
namespace DanielGoerz\JsonExample\Controller;

/*
 * This file is part of TYPO3 CMS-based extension json_example by Daniel Goerz.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use DanielGoerz\JsonExample\Mvc\View\JsonView;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class AbstractRestController
 *
 * @author Daniel Goerz <daniel.goerz+github@posteo.de>
 */
abstract class AbstractApiController extends ActionController
{
    /**
     * @var \TYPO3\CMS\Extbase\Mvc\View\JsonView
     */
    protected $view;

    /**
     * @var string
     */
    protected $defaultViewObjectName = JsonView::class;

    protected string $resourceArgumentName;

    /**
     * Resolves and checks the current action method name
     */
    protected function resolveActionMethodName(): string
    {
        switch ($this->request->getMethod()) {
            case 'HEAD':
            case 'GET':
                $actionName = ($this->request->hasArgument($this->resourceArgumentName)) ? 'show' : 'list';
                return $actionName . 'Action';

            // Not supported in Example
            case 'POST':
            case 'PUT':
            case 'DELETE':
            default:
                $this->throwStatus(400, null, 'Bad Request.');
        }
        $this->throwStatus(400, null, 'Bad Request.');
        return '';
    }

    protected function mapRequestArgumentsToControllerArguments(): void
    {
        try {
            parent::mapRequestArgumentsToControllerArguments();
        } catch (\Exception $e) {
            $this->throwStatus(404, null, ucfirst($this->resourceArgumentName) . ' not found.');
        }
    }
}
