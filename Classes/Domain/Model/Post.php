<?php
namespace DanielGoerz\JsonExample\Domain\Model;

/**
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

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Post
 *
 * @author Daniel Goerz <ervaude@gmail.com>
 */
class Post extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var string
     */
    protected $postText = '';

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielGoerz\JsonExample\Domain\Model\Tag>
     */
    protected $tags = null;

    public function __construct()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getPostText()
    {
        return $this->postText;
    }

    /**
     * @param string $postText
     * @return void
     */
    public function setPostText($postText)
    {
        $this->postText = $postText;
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielGoerz\JsonExample\Domain\Model\Tag>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\DanielGoerz\JsonExample\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }
}
