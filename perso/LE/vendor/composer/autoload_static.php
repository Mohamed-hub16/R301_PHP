<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf92e1c3275fbe195606ade1510be3043
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sebas\\Test\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sebas\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf92e1c3275fbe195606ade1510be3043::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf92e1c3275fbe195606ade1510be3043::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf92e1c3275fbe195606ade1510be3043::$classMap;

        }, null, ClassLoader::class);
    }
}