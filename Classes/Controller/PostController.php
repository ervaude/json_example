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
use DanielGoerz\JsonExample\Domain\Model\Post;
use DanielGoerz\JsonExample\Domain\Repository\PostRepository;

/**
 * Class TagController
 *
 * @author Daniel Goerz <ervaude@gmail.com>
 */
class PostController extends AbstractApiController
{
    /**
     * @var string
     */
    protected $resourceArgumentName = 'post';

    /**
     * @var \DanielGoerz\JsonExample\Domain\Repository\PostRepository
     */
    protected $resourceRepository;

    /**
     * @param PostRepository $resourceRepository
     */
    public function injectResourceRepository(PostRepository $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    /**
     * Action Show
     *
     * @param Post $post
     */
    public function showAction(Post $post)
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName]);
        $this->view->assign($this->resourceArgumentName, $post);
    }
}
