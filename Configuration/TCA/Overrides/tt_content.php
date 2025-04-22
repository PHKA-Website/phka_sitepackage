<?php

defined('TYPO3') || die();

(function() {
    /**
     * Override single fields
     */
    $GLOBALS['TCA']['tt_content']['columns']['space_before_class']['config']['items'] = [
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'value' => 'extra-small'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'value' => 'small'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'value' => 'medium'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'value' => 'large'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'value' => 'extra-large'],
    ];
    $GLOBALS['TCA']['tt_content']['columns']['space_before_class']['config']['default'] = 'medium';

    $GLOBALS['TCA']['tt_content']['columns']['space_after_class']['config']['items'] = [
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small', 'value' => 'extra-small'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small', 'value' => 'small'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium', 'value' => 'medium'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large', 'value' => 'large'],
        ['label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large', 'value' => 'extra-large'],
    ];
    $GLOBALS['TCA']['tt_content']['columns']['space_after_class']['config']['default'] = 'medium';

})();
