<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit412ae28c3153124dd63aba861c9436ae
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit412ae28c3153124dd63aba861c9436ae::$classMap;

        }, null, ClassLoader::class);
    }
}
