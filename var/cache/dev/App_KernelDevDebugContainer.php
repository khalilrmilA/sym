<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container39dGZTO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container39dGZTO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container39dGZTO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container39dGZTO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container39dGZTO\App_KernelDevDebugContainer([
    'container.build_hash' => '39dGZTO',
    'container.build_id' => '7b3d0e23',
    'container.build_time' => 1714235856,
], __DIR__.\DIRECTORY_SEPARATOR.'Container39dGZTO');
