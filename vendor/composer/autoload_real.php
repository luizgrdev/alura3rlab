<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit531bad8150998d2890ecd37da92ee62a
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit531bad8150998d2890ecd37da92ee62a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit531bad8150998d2890ecd37da92ee62a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit531bad8150998d2890ecd37da92ee62a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}