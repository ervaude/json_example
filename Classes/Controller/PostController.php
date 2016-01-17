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
     * @inject
     */
    protected $resourceRepository;

    /**
     * Action Show
     *
     * @param Post $post
     * @return void
     */
    public function showAction(Post $post)
    {
        $this->view->assign($this->resourceArgumentName, $post);
    }
}
