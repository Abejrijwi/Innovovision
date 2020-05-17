<?php

class Controllers extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['title'] = 'Innovovision : Home';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/home');
        $this->load->view('front/footer');
    }

    public function Privacy_and_policy() {
        $this->data['title'] = 'Innovovision : Privacy & Policy';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/privacy');
        $this->load->view('front/footer');
    }

    public function terms_and_conditions() {
        $this->data['title'] = 'Innovovision : Terms & Conditions';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/terms');
        $this->load->view('front/footer');
    }

    public function transform() {
        $this->data['title'] = 'Innovovision : Terms & Conditions';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/transform');
        $this->load->view('front/footer');
    }

    public function psychology_change() {
        $this->data['title'] = 'Innovovision : Terms & Conditions';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/psychology_change');
        $this->load->view('front/footer');
    }

    public function quality_management() {
        $this->data['title'] = 'Innovovision : Terms & Conditions';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/quality_management');
        $this->load->view('front/footer');
    }

}
