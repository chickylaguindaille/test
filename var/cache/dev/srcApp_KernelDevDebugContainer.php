<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZPdfxc5\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZPdfxc5/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZPdfxc5.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZPdfxc5\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZPdfxc5\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZPdfxc5',
    'container.build_id' => 'e3c1b154',
    'container.build_time' => 1687776044,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZPdfxc5');
