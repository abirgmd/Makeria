<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNi7xDEk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNi7xDEk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNi7xDEk.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNi7xDEk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNi7xDEk\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ni7xDEk',
    'container.build_id' => '8520761b',
    'container.build_time' => 1741038709,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNi7xDEk');
