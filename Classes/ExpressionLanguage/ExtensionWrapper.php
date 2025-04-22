<?php

declare(strict_types = 1);

namespace PHKA\Sitepackage\ExpressionLanguage;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * ExtensionWrapper
 */
class ExtensionWrapper
{
    /**
     * @param string $extensionKey
     * @return bool
     */
    public function isLoaded($extensionKey): bool
    {
        return ExtensionManagementUtility::isLoaded($extensionKey);
    }
}
