<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQAccwrF\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQAccwrF/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerQAccwrF.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerQAccwrF\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerQAccwrF\App_KernelProdContainer([
    'container.build_hash' => 'QAccwrF',
    'container.build_id' => '514bf7e0',
    'container.build_time' => 1677507535,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQAccwrF');
