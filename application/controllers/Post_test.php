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

        \$this->load->helper('print_d');
        \$this->load->helper('url');

        \$client = new GuzzleHttp\Client();
        \$res = \$client->post(
            site_url('api/example/users'),
            [
                'auth' =>  ['admin', '1234'],
                'verify' => false,  // Disable SSL verification, this option value is insecure and should be avoided!,
                'form_params' => array('name' => 'John', 'email' => 'john@example.com')
            ]
        );

        \$result = (string) \$res->getBody();
        \$status_code = \$res->getStatusCode();

        \$content_type = \$res->getHeader('content-type');
        \$content_type = is_array(\$content_type) ? \$content_type[0] : \$content_type;


EOT;

        eval($code_example);

        $this->load->view('post_test', compact('code_example', 'result', 'status_code', 'content_type'));
    }
}
