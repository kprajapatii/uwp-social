<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61ada66dc2dd771bd19374993376bffa
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61ada66dc2dd771bd19374993376bffa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61ada66dc2dd771bd19374993376bffa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit61ada66dc2dd771bd19374993376bffa::$classMap;

        }, null, ClassLoader::class);
    }
}
