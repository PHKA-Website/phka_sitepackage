<?php

declare(strict_types = 1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return (function() {
    $icons = [];

    foreach ([
        // 'apps-pagetree-folder-slug' => 'apps-pagetree-folder-slug.svg',
    ] as $identifier => $path) {
        $icons['phka_sitepackage-' . $identifier] = [
            'provider' => SvgIconProvider::class,
            'source' => 'EXT:phka_sitepackage/Resources/Public/Icons/Backend/' . $path
        ];
    }
    
    return $icons;
})();
