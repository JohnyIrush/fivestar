<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f5683bd3db49d9217401cac68129966
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Softwarescares\\Intelifinance\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Softwarescares\\Intelifinance\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f5683bd3db49d9217401cac68129966::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f5683bd3db49d9217401cac68129966::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f5683bd3db49d9217401cac68129966::$classMap;

        }, null, ClassLoader::class);
    }
}
