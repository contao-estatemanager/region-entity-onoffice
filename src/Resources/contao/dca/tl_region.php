<?php
/*
 * This file is part of Oveleon ContaoOnofficeApiBundle.
 *
 * (c) https://www.oveleon.de/
 */

// Global operations
$GLOBALS['TL_DCA']['tl_region']['list']['global_operations']['importRegions'] = array(
    'href'                => 'key=importRegions',
    'class'               => 'header_theme_import'
);

// Set index for oid
$GLOBALS['TL_DCA']['tl_region']['config']['sql']['keys']['oid'] = 'index';

// Add fields
$GLOBALS['TL_DCA']['tl_region']['fields']['oid'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_region']['oid'],
    'exclude'                 => true,
    'search'                  => true,
    'sorting'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
