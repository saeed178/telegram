<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb5b1c20c34151a105815fb0a5500314
{
    public static $files = array (
        'd5e184bb3537ab5eb44dbd1454cfd70b' => __DIR__ . '/..' . '/hoa/core/Core.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Bridge\\Twig\\' => 20,
            'Silex\\' => 6,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'Longman\\TelegramBot\\' => 20,
        ),
        'H' => 
        array (
            'Hoa\\Visitor\\' => 12,
            'Hoa\\Ustring\\' => 12,
            'Hoa\\Stream\\' => 11,
            'Hoa\\Regex\\' => 10,
            'Hoa\\Math\\' => 9,
            'Hoa\\Iterator\\' => 13,
            'Hoa\\File\\' => 9,
            'Hoa\\Core\\' => 9,
            'Hoa\\Compiler\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Bridge\\Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/twig-bridge',
        ),
        'Silex\\' => 
        array (
            0 => __DIR__ . '/..' . '/silex/silex/src/Silex',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Longman\\TelegramBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/longman/telegram-bot/src',
        ),
        'Hoa\\Visitor\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/visitor',
        ),
        'Hoa\\Ustring\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/ustring',
        ),
        'Hoa\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/stream',
        ),
        'Hoa\\Regex\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/regex',
        ),
        'Hoa\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/math',
        ),
        'Hoa\\Iterator\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/iterator',
        ),
        'Hoa\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/file',
        ),
        'Hoa\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/core',
        ),
        'Hoa\\Compiler\\' => 
        array (
            0 => __DIR__ . '/..' . '/hoa/compiler',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb5b1c20c34151a105815fb0a5500314::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb5b1c20c34151a105815fb0a5500314::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdb5b1c20c34151a105815fb0a5500314::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
