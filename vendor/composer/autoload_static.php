<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit602e0525d411d4f2aa137d64da4d81f1
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit602e0525d411d4f2aa137d64da4d81f1::$classMap;

        }, null, ClassLoader::class);
    }
}
