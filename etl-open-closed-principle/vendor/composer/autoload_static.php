<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteea74b5a4fbff62e880788b816c1b33f
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteea74b5a4fbff62e880788b816c1b33f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteea74b5a4fbff62e880788b816c1b33f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteea74b5a4fbff62e880788b816c1b33f::$classMap;

        }, null, ClassLoader::class);
    }
}
