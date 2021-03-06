<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7c69b25c9567a8bf889ba2842718848
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7c69b25c9567a8bf889ba2842718848::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7c69b25c9567a8bf889ba2842718848::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
