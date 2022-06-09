<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89da5f866dc516624b5b485fe567e853
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Softwarescares\\Inteliinventory\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Softwarescares\\Inteliinventory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit89da5f866dc516624b5b485fe567e853::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89da5f866dc516624b5b485fe567e853::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89da5f866dc516624b5b485fe567e853::$classMap;

        }, null, ClassLoader::class);
    }
}
