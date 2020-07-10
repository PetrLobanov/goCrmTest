<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc5749db0177ec313cab357ce6f5c113
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Route\\' => 6,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Route\\' => 
        array (
            0 => __DIR__ . '/../..' . '/route',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc5749db0177ec313cab357ce6f5c113::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc5749db0177ec313cab357ce6f5c113::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
