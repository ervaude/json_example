<?php
declare(strict_types=1);
namespace DanielGoerz\JsonExample\Domain\Repository;

/*
 * This file is part of TYPO3 CMS-based extension json_example by Daniel Goerz.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Class TagRepository
 *
 * @author Daniel Goerz <daniel.goerz+github@posteo.de>
 */
class TagRepository extends Repository
{
    /**
     * @return void
     */
    public function initializeObject()
    {
        /** @var QuerySettingsInterface $defaultQuerySettings */
        $defaultQuerySettings = $this->objectManager->get(QuerySettingsInterface::class);
        $defaultQuerySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($defaultQuerySettings);
    }
}
