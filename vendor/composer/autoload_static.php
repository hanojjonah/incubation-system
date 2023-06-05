<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit242549fe8bdb844df2baa555a14b6caa
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit242549fe8bdb844df2baa555a14b6caa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit242549fe8bdb844df2baa555a14b6caa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit242549fe8bdb844df2baa555a14b6caa::$classMap;

        }, null, ClassLoader::class);
    }
}
