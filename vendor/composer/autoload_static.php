<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit496b299e693cada5206e1d1954ad983e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit496b299e693cada5206e1d1954ad983e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit496b299e693cada5206e1d1954ad983e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit496b299e693cada5206e1d1954ad983e::$classMap;

        }, null, ClassLoader::class);
    }
}
