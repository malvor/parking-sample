<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc831ada29246648333acfc244f19bb6c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc831ada29246648333acfc244f19bb6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc831ada29246648333acfc244f19bb6c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
