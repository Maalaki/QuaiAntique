<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSaQbwgA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSaQbwgA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSaQbwgA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSaQbwgA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSaQbwgA\App_KernelDevDebugContainer([
    'container.build_hash' => 'SaQbwgA',
    'container.build_id' => 'fe6490bd',
    'container.build_time' => 1677581677,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSaQbwgA');
