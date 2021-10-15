<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30287e4325bec37f9bb5526aa8152552
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        'c292ee0b2838b924f4a76c443067ef33' => __DIR__ . '/../..' . '/src/Controller.php',
        '416264dda4901856fea7dff2581b4bf0' => __DIR__ . '/../..' . '/src/View.php',
        '5c680649736dcfb6ed41d7404dc367f4' => __DIR__ . '/../..' . '/src/Model.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit30287e4325bec37f9bb5526aa8152552::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit30287e4325bec37f9bb5526aa8152552::$classMap;

        }, null, ClassLoader::class);
    }
}
