<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4748ae1886a59e3c5d2ca9ab1d5aa96f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'PHPAntiSpam\\' => 12,
        ),
        'F' => 
        array (
            'Fullworks_WP_Autoloader\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'PHPAntiSpam\\' => 
        array (
            0 => __DIR__ . '/..' . '/alanef/phpantispam/src',
        ),
        'Fullworks_WP_Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/alanef/wp_autoloader/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Gamajo_Template_Loader' => __DIR__ . '/..' . '/gamajo/template-loader/class-gamajo-template-loader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4748ae1886a59e3c5d2ca9ab1d5aa96f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4748ae1886a59e3c5d2ca9ab1d5aa96f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4748ae1886a59e3c5d2ca9ab1d5aa96f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4748ae1886a59e3c5d2ca9ab1d5aa96f::$classMap;

        }, null, ClassLoader::class);
    }
}
