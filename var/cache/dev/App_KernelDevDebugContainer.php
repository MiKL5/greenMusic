<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRqF22VC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRqF22VC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRqF22VC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRqF22VC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRqF22VC\App_KernelDevDebugContainer([
    'container.build_hash' => 'RqF22VC',
    'container.build_id' => '7af9c0d4',
    'container.build_time' => 1670168370,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRqF22VC');
