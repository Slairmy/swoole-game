<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc00c18c9adf75cbdff824c31edaeda3
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc00c18c9adf75cbdff824c31edaeda3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc00c18c9adf75cbdff824c31edaeda3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
