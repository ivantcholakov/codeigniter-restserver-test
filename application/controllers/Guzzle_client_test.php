<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guzzle_client_test extends CI_Controller {

    public function index()
    {
        $php_required = '5.5';
        $this->load->helper('url');

        $result = null;
        $status_code = null;
        $content_type = null;

        $code_example = <<<EOT

        \$user_id = 1;

        \$this->load->helper('url');

        \$client = new GuzzleHttp\Client();
        \$res = \$client->get(site_url('api/example/users/id/'.\$user_id.'/format/json'), ['auth' =>  ['admin', '1234']]);

        \$result = (string) \$res->getBody();
        \$status_code = \$res->getStatusCode();

        \$content_type = \$res->getHeader('content-type');
        \$content_type = is_array(\$content_type) ? \$content_type[0] : \$content_type;

EOT;

        if (is_php($php_required))
        {
            eval($code_example);
        }

        $this->load->view('guzzle_client_test', compact('php_required', 'code_example', 'result', 'status_code', 'content_type'));
    }
}
