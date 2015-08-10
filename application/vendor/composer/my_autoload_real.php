<?php

// See https://github.com/composer/composer/issues/4340

class ComposerAutoloaderInit54058c9d5fd9edc6c7a76b6c9c5c789d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit54058c9d5fd9edc6c7a76b6c9c5c789d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit54058c9d5fd9edc6c7a76b6c9c5c789d', 'loadClassLoader'));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
            composerRequire54058c9d5fd9edc6c7a76b6c9c5c789d($file);
        }

        return $loader;
    }
}

function composerRequire54058c9d5fd9edc6c7a76b6c9c5c789d($file)
{
    // This tweak allowes installed Guzzle 6 (requires PHP 5.5)
    // not to cause source parsing error on lower PHP versions.
    if (!is_php('5.5'))
    {
        if (strpos($file, 'guzzlehttp/') !== false)
        {
            return;
        }
    }
    //

    require $file;
}
