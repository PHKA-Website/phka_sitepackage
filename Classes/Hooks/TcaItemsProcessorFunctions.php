<?php

declare(strict_types=1);

namespace PHKA\Sitepackage\Hooks;

/**
 * Various items processor functions
 */
class TcaItemsProcessorFunctions
{
    /**
     * Using a Select field with fileFolderConfig, value and label contains the file extension. This function removes it from both fields.
     * 
     * @param array &$config configuration array
     */
    public function removeFileExtension(array &$config): void
    {
        array_map(fn($item) => $item['label'] = $item['value'] = pathinfo($item['value'], PATHINFO_FILENAME), $config['items']);
    }
}
