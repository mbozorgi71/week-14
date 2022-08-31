<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9bbb8e372608330b53569b4b732baf4
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9bbb8e372608330b53569b4b732baf4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9bbb8e372608330b53569b4b732baf4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9bbb8e372608330b53569b4b732baf4::$classMap;

        }, null, ClassLoader::class);
    }
}
