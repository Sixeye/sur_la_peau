<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHEah1Pr\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHEah1Pr/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHEah1Pr.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHEah1Pr\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHEah1Pr\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HEah1Pr',
    'container.build_id' => 'd787470f',
    'container.build_time' => 1553269121,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHEah1Pr');
