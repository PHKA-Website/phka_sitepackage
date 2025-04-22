<?php

declare(strict_types = 1);

namespace PHKA\Sitepackage\ExpressionLanguage;

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * TypoScriptConditionProvider
 */
class TypoScriptConditionProvider extends AbstractProvider
{
    public function __construct()
    {
        $this->expressionLanguageVariables = [
            'extension' => GeneralUtility::makeInstance(ExtensionWrapper::class)
        ];
    }
}
