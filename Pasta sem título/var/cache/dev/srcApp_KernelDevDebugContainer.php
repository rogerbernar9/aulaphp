<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3BKa0AZ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3BKa0AZ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3BKa0AZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3BKa0AZ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3BKa0AZ\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => '3BKa0AZ',
    'container.build_id' => '424d99cd',
    'container.build_time' => 1544464900,
), __DIR__.\DIRECTORY_SEPARATOR.'Container3BKa0AZ');
