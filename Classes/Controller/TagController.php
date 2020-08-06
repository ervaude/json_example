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

use DanielGoerz\JsonExample\Domain\Model\Tag;
use DanielGoerz\JsonExample\Domain\Repository\TagRepository;

class TagController extends AbstractApiController
{
    protected string $resourceArgumentName = 'tag';

    protected TagRepository $tagRepository;

    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    public function showAction(Tag $tag): void
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName]);
        $this->view->assign($this->resourceArgumentName, $tag);
    }

    public function listAction(): void
    {
        $this->view->setVariablesToRender([$this->resourceArgumentName . 's']);
        $this->view->assign($this->resourceArgumentName . 's', $this->tagRepository->findAll());
    }
}
