<?php

/*
 * This file is part of Oveleon Region Entity.
 *
 * (c) https://www.oveleon.de/
 */

declare(strict_types=1);

namespace ContaoEstateManager\RegionEntityOnOffice\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use ContaoEstateManager\RegionEntity\RegionEntity;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoEstateManager\RegionEntityOnOffice\RegionEntityOnOffice;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(RegionEntityOnOffice::class)
                ->setLoadAfter([ContaoCoreBundle::class, RegionEntity::class])
                ->setReplace(['region-entity-onoffice']),
        ];
    }
}
