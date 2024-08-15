<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04fa33793fba15213b8c30e2b91e1f1d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit04fa33793fba15213b8c30e2b91e1f1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04fa33793fba15213b8c30e2b91e1f1d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04fa33793fba15213b8c30e2b91e1f1d::$classMap;

        }, null, ClassLoader::class);
    }
}
