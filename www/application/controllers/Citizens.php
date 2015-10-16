<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Citizens extends CI_Controller {

    public function index() {
        $this->load->view('citizens_list');
    }

}
