<?php
namespace DanielGoerz\JsonExample\Controller;

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
use DanielGoerz\JsonExample\Mvc\View\JsonView;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class AbstractRestController
 *
 * @author Daniel Goerz <ervaude@gmail.com>
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

    /**
     * @var string
     */
    protected $resourceArgumentName;

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\Repository
     */
    protected $resourceRepository;

    /**
     * Resolves and checks the current action method name
     *
     * @return string Method name of the current action
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     */
    protected function resolveActionMethodName()
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
    }

    /**
     * Maps arguments delivered by the request object to the local controller arguments.
     *
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\StopActionException
     * @throws \TYPO3\CMS\Extbase\Mvc\Exception\UnsupportedRequestTypeException
     */
    protected function mapRequestArgumentsToControllerArguments()
    {
        try {
            parent::mapRequestArgumentsToControllerArguments();
        } catch (\Exception $e) {
            $this->throwStatus(404, null, ucfirst($this->resourceArgumentName) . ' not found.');
        }
    }

    /**
     * Action List
     */
    public function listAction()
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName . 's']);
        $this->view->assign($this->resourceArgumentName . 's', $this->resourceRepository->findAll());
    }
}
