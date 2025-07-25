<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2266e5b378708866d85a85c34e8027b5
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dado\\Gs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dado\\Gs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2266e5b378708866d85a85c34e8027b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2266e5b378708866d85a85c34e8027b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2266e5b378708866d85a85c34e8027b5::$classMap;

        }, null, ClassLoader::class);
    }
}
