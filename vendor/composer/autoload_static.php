<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedcc1c276d8036fd3a3441b4f49bce39
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedcc1c276d8036fd3a3441b4f49bce39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedcc1c276d8036fd3a3441b4f49bce39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedcc1c276d8036fd3a3441b4f49bce39::$classMap;

        }, null, ClassLoader::class);
    }
}
