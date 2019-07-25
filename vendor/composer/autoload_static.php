<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc81c750262f58696cc99ee2df24a437a
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HaiKang\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HaiKang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/IC_V1.3',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc81c750262f58696cc99ee2df24a437a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc81c750262f58696cc99ee2df24a437a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}