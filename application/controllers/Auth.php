<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

/**
 * Description of Auth
 *
 * @author Virendra Jadeja <virendrajadeja84@gmail.com>
 */
class Auth extends REST_Controller {

    public function __construct($config = 'rest') {
        parent::__construct($config);
    }

    public function login_get() {
        $this->set_response([
            'status' => TRUE,
            'message' => 'It works!'
                ], REST_Controller::HTTP_OK);
    }

}
