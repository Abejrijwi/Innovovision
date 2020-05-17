<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->data['title'] = 'Error 404';
        $this->load->view('front/header', $this->data);
       
        $this->load->view('front/page404',$data);//loading in my template 
         $this->load->view('front/footer');
    } 
} 

