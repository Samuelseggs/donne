<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ce2a08cc773df6f08e9fc241520922d
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yabacon\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yabacon\\' => 
        array (
            0 => __DIR__ . '/..' . '/yabacon/paystack-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ce2a08cc773df6f08e9fc241520922d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ce2a08cc773df6f08e9fc241520922d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
