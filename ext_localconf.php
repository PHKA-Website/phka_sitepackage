<?php

declare(strict_types = 1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Add RTE configurations
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['phka_default'] = 'EXT:phka_sitepackage/Configuration/RTE/Default.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['phka_full'] = 'EXT:phka_sitepackage/Configuration/RTE/Full.yaml';
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['phka_minimal'] = 'EXT:phka_sitepackage/Configuration/RTE/Minimal.yaml';
