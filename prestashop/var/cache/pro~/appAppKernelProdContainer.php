<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHxpQG0R\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHxpQG0R/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerHxpQG0R.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerHxpQG0R\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerHxpQG0R\appAppKernelProdContainer([
    'container.build_hash' => 'HxpQG0R',
    'container.build_id' => '13bce665',
    'container.build_time' => 1698073617,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHxpQG0R');
