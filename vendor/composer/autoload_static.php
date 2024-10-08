<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit865b640df91311a4307f56939508ea51
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fabmedia\\LaravelSlackNotifier\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fabmedia\\LaravelSlackNotifier\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit865b640df91311a4307f56939508ea51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit865b640df91311a4307f56939508ea51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit865b640df91311a4307f56939508ea51::$classMap;

        }, null, ClassLoader::class);
    }
}
