<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index() {
        $this->data['title'] = 'Innovovision : Contact us';
        $this->load->view('front/header', $this->data);
        $this->load->view('front/contact');
        $this->load->view('front/footer');
    }

    public function save_contacts() {

        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
        $this->form_validation->set_rules('country', 'Country', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]|numeric');
        $this->form_validation->set_rules('subjects', 'Subject', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {

            $this->index();
        } else {

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $country = $this->input->post('country');
            $subject = $this->input->post('subjects');
            $contact = $this->input->post('contact');
            $message = $this->input->post('message');
//echo '<pre>';
//print_r($_POST); exit;
            $flag = $this->db->query("insert into tbl_contact(first_name,address,country,mobile,email,subject,message) values('$name','$address','$country','$contact','$email','$subject','$message')");

            if ($flag) {
                $this->session->set_flashdata('message', 'Your Message is sucessfully sent. Our team will contact you soon.');
                redirect('contact');
            } else {
                $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
                redirect('contact');
            }
        }
    }

}
