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

use DanielGoerz\JsonExample\Domain\Model\Post;
use DanielGoerz\JsonExample\Domain\Repository\PostRepository;

class PostController extends AbstractApiController
{
    protected string $resourceArgumentName = 'post';

    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function showAction(Post $post): void
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName]);
        $this->view->assign($this->resourceArgumentName, $post);
    }

    public function listAction(): void
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName . 's']);
        $this->view->assign($this->resourceArgumentName . 's', $this->postRepository->findAll());
    }
}
