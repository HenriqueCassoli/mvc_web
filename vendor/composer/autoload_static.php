<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit324e84e79c143c8d353af0d9b10a77ab
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HenriqueCassoli\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HenriqueCassoli\\' => 
        array (
            0 => __DIR__ . '/../..' . '/HenriqueCassoli',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit324e84e79c143c8d353af0d9b10a77ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit324e84e79c143c8d353af0d9b10a77ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit324e84e79c143c8d353af0d9b10a77ab::$classMap;

        }, null, ClassLoader::class);
    }
}
