<?php
declare(strict_types=1);
namespace DanielGoerz\JsonExample\Domain\Model;

/*
 * This file is part of TYPO3 CMS-based extension json_example by Daniel Goerz.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Post extends AbstractEntity
{
    protected string $title = '';
    protected string $postText = '';

    /**
     * @var ObjectStorage<Tag>
     */
    protected $tags;

    public function __construct(string $title, string $postText)
    {
        $this->tags = new ObjectStorage();
        $this->title = $title;
        $this->postText = $postText;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPostText(): string
    {
        return $this->postText;
    }

    /**
     * @return ObjectStorage<Tag>
     */
    public function getTags(): ObjectStorage
    {
        return $this->tags;
    }
}
