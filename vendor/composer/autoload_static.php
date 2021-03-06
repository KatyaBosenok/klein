<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcaebe286b5c6c3ab621aee4b6256190
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Valitron' => 
            array (
                0 => __DIR__ . '/..' . '/vlucas/valitron/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcaebe286b5c6c3ab621aee4b6256190::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcaebe286b5c6c3ab621aee4b6256190::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfcaebe286b5c6c3ab621aee4b6256190::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
