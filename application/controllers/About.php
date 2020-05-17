<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $this->data['title'] = 'Innovovision : About us';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/about');
        $this->load->view('front/footer');
    }

}
