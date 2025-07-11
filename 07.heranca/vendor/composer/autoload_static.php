<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e6388afab8503164be4049f211b9a57
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e6388afab8503164be4049f211b9a57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e6388afab8503164be4049f211b9a57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e6388afab8503164be4049f211b9a57::$classMap;

        }, null, ClassLoader::class);
    }
}
