<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function index() {
        $this->data['title'] = 'Innovovision : Our Services';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/services');
        $this->load->view('front/footer');
    }

}
