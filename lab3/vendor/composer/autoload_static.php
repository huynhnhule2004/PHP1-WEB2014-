<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3cd002e86969f45da19a352f4897b912
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3cd002e86969f45da19a352f4897b912::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3cd002e86969f45da19a352f4897b912::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3cd002e86969f45da19a352f4897b912::$classMap;

        }, null, ClassLoader::class);
    }
}