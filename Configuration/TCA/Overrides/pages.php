<?php

use TYPO3\CMS\Core\Domain\Repository\PageRepository;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

use PHKA\Sitepackage\Hooks\TcaItemsProcessorFunctions;

defined('TYPO3') || die();

(function() {
    /**
     * Extension key
     */
    $extensionKey = 'phka_sitepackage';

    /**
     * Add TsConfig
     */
    // ExtensionManagementUtility::registerPageTSConfigFile(
    //     $extensionKey,
    //     'Configuration/TsConfig/Page/All.tsconfig',
    //     'Sitepackage of the University of Education'
    // );

    /**
     * Override single fields
     */
    $GLOBALS['TCA']['pages']['columns']['slug']['config']['generatorOptions']['fields'] = [['nav_title', 'title']];

    /**
     * Override multiple fields
     */
    $GLOBALS['TCA']['pages']['columns'] = array_replace_recursive(
        $GLOBALS['TCA']['pages']['columns'],
        [
            'icon' => [
                'label' => 'LLL:EXT:phka_sitepackage/Resources/Private/Language/locallang.be.xlf:pages.icon',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'default' => '',
                    'disableNoMatchingValueElement' => true,
                    'items' => [
                        [
                            'label' => '',
                            'value' => '',
                        ],
                    ],
                    'fileFolderConfig' => [
                        'folder' => 'EXT:phka_frontend/Resources/Public/Icons/Frontend',
                        'allowedExtensions' => 'svg',
                        'depth' => 0,
                    ],
                    'itemsProcFunc' => TcaItemsProcessorFunctions::class . '->removeFileExtension',
                ],
                'l10n_mode' => 'exclude',
            ],
        ],
    );

    // Assign position to fields
    ExtensionManagementUtility::addToAllTCAtypes('pages', 'icon', '1,3,4', 'after:nav_title');
})();
