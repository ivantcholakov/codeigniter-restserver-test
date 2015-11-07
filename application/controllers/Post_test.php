<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_test extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        $result = null;
        $status_code = null;
        $content_type = null;

        $code_example = <<<EOT

        \$user_id = 1;

        \$this->load->helper('url');

        \$headers = array('Accept' => 'application/json');
        \$options = array('auth' => array('admin', '1234'));
        \$data = array('name' => 'John', 'email' => 'john@example.com');
        \$request = Requests::post(site_url('api/example/users'), \$headers, \$data, \$options);

        \$result = \$request->body;
        \$status_code = \$request->status_code;
        \$content_type = \$request->headers['content-type'];

EOT;

        eval($code_example);

        $this->load->view('post_test', compact('code_example', 'result', 'status_code', 'content_type'));
    }
}
