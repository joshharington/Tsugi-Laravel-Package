<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit409712234098604217e3efc215a6634b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tsugi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tsugi\\' => 
        array (
            0 => __DIR__ . '/..' . '/tsugi/lib/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit409712234098604217e3efc215a6634b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit409712234098604217e3efc215a6634b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
