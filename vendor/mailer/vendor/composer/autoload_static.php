<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2e3d0cafc31835abc825048d2f217f4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2e3d0cafc31835abc825048d2f217f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2e3d0cafc31835abc825048d2f217f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc2e3d0cafc31835abc825048d2f217f4::$classMap;

        }, null, ClassLoader::class);
    }
}
