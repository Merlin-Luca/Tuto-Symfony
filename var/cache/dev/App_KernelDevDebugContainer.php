<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUmuVyrU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUmuVyrU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUmuVyrU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUmuVyrU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUmuVyrU\App_KernelDevDebugContainer([
    'container.build_hash' => 'UmuVyrU',
    'container.build_id' => 'db601814',
    'container.build_time' => 1677233840,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUmuVyrU');
