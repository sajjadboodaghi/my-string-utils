<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7bde3028c44734b9a6ffd83c4de57b9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SajjadBoodaghi\\MyStringUtils\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SajjadBoodaghi\\MyStringUtils\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7bde3028c44734b9a6ffd83c4de57b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7bde3028c44734b9a6ffd83c4de57b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7bde3028c44734b9a6ffd83c4de57b9::$classMap;

        }, null, ClassLoader::class);
    }
}
