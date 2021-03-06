<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d2fb0de9f2ce50347e04f3b290cca7a
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d2fb0de9f2ce50347e04f3b290cca7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d2fb0de9f2ce50347e04f3b290cca7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7d2fb0de9f2ce50347e04f3b290cca7a::$classMap;

        }, null, ClassLoader::class);
    }
}
