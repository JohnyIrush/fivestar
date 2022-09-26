<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteddf04d5a1e0f3aed0e6eafb19aa79cc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Softwarescares\\Inteligoogle\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Softwarescares\\Inteligoogle\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteddf04d5a1e0f3aed0e6eafb19aa79cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteddf04d5a1e0f3aed0e6eafb19aa79cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteddf04d5a1e0f3aed0e6eafb19aa79cc::$classMap;

        }, null, ClassLoader::class);
    }
}
