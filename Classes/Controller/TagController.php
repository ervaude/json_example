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
use DanielGoerz\JsonExample\Domain\Model\Tag;
use DanielGoerz\JsonExample\Domain\Repository\TagRepository;

/**
 * Class TagController
 *
 * @author Daniel Goerz <ervaude@gmail.com>
 */
class TagController extends AbstractApiController
{
    /**
     * @var string
     */
    protected $resourceArgumentName = 'tag';

    /**
     * @var \DanielGoerz\JsonExample\Domain\Repository\TagRepository
     */
    protected $resourceRepository;

    public function injectResourceRepository(TagRepository $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    /**
     * Action Show
     *
     * @param Tag $tag
     * @return void
     */
    public function showAction(Tag $tag)
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName]);
        $this->view->assign($this->resourceArgumentName, $tag);
    }
}
