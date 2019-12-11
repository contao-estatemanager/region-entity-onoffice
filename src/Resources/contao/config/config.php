<?php

/*
 * This file is part of Oveleon Region Entity.
 *
 * (c) https://www.oveleon.de/
 */

// Back end modules
array_insert($GLOBALS['BE_MOD']['real_estate']['regions'], 1, array
(
    'importRegions' => array('\\ContaoEstateManager\\RegionEntityOnOffice\\Regions', 'setupImport')
));
