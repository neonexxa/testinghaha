<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41539d573950597ef4fab5e63d822278
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Towords\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Towords\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Towords',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41539d573950597ef4fab5e63d822278::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41539d573950597ef4fab5e63d822278::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}