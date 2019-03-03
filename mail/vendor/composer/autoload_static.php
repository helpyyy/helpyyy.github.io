<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd624be2d36eedd8bc03c1d182c379ead
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd624be2d36eedd8bc03c1d182c379ead::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd624be2d36eedd8bc03c1d182c379ead::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
