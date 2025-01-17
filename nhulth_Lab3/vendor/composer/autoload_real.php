<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfad28d070edfa5ca0c399d907c9b4ced
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

        spl_autoload_register(array('ComposerAutoloaderInitfad28d070edfa5ca0c399d907c9b4ced', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfad28d070edfa5ca0c399d907c9b4ced', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfad28d070edfa5ca0c399d907c9b4ced::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
