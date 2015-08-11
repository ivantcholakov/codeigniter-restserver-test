<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * A simple class autoloader for CodeIgniter
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2015.
 * @license The MIT License
 *
 * Important note: Within the file application/config/config.php find the setting
 * $config['enable_hooks'] and set it to TRUE.
 */

function pre_system_1() {

    spl_autoload_register('pre_system_1_autoload');
}

function pre_system_1_autoload($class) {

    $class = (string) $class;

    // No class name? Abort.
    if ($class == '') {
        return false;
    }

    // PSR-0 autoloading.
    if (is_file($location = APPPATH.'classes/'.str_replace('_', DIRECTORY_SEPARATOR, $class).'.php')) {
        require $location;
        return true;
    }

    return false;
}
