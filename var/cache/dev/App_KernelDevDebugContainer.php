<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUAh3syp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUAh3syp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUAh3syp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUAh3syp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUAh3syp\App_KernelDevDebugContainer([
    'container.build_hash' => 'UAh3syp',
    'container.build_id' => 'caf45e60',
    'container.build_time' => 1627652843,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUAh3syp');
