<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * A simple class autoloader.
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2017.
 * @license The MIT License
 *
 * Important note: Within the file application/config/config.php find the setting
 * $config['enable_hooks'] and set it to TRUE.
 */

function pre_system_1() {

    spl_autoload_register('pre_system_1_autoload');
}

function pre_system_1_autoload($class) {

    switch ($class) {

        case 'Restserver\\Libraries\\REST_Controller':
        case 'REST_Controller':
            require_once APPPATH . '/libraries/REST_Controller.php';
            return;
    }

}
