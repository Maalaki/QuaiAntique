<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxWfWev\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxWfWev/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxWfWev.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxWfWev\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxWfWev\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxWfWev',
    'container.build_id' => '524c2523',
    'container.build_time' => 1679481447,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxWfWev');
