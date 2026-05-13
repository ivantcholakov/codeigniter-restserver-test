<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__).'/RestController.php';

class REST_Controller extends \Restserver\Libraries\REST_Controller {

    public function __construct($config = 'rest') {

        parent::__construct($config);
    }

}
