<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Rest_client_test extends CI_Controller {

    public function index()
    {
        $code_example = <<<EOT

        \$user_id = 1;

        \$this->load->helper('url');

        \$this->load->library('rest_client', array(
            'server' => site_url('api/example/'),
            //'http_user' => 'admin',
            //'http_pass' => '1234',
            //'http_auth' => 'basic' // or 'digest'
        ));

        \$result = \$this->rest_client->get('users/id/'.\$user_id.'/format/json');

EOT;

        eval($code_example);

        $this->load->view('rest_client_test', compact('code_example', 'result'));
    }
}
