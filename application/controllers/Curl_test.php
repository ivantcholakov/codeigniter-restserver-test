<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Curl_test extends CI_Controller {

    public function index()
    {
        $code_example = <<<EOT

        \$user_id = 1;

        \$this->load->helper('url');
        \$this->load->library('curl');

        \$this->curl->create(site_url('api/example/users/id/'.\$user_id.'/format/json'));

        // Optional, delete this line if your API is open.
        \$username = 'admin';
        \$password = '1234';
        \$this->curl->http_login(\$username, \$password);

        \$result = \$this->curl->get()->execute();

EOT;

        eval($code_example);

        $this->load->view('curl_test', compact('code_example', 'result'));
    }
}
