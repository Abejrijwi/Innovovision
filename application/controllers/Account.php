<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class Account extends Authcontroller {

    public function index() {
        $this->load->view('admin/supporter/header');
        $this->load->view('admin/settings/changepass');
        $this->load->view('admin/supporter/Footer');
    }

    public function changePassword() {


        $user_session = ($_SESSION['logged_in']);
        $uid = $user_session['uid'];

        $userData = $this->db->query("select * from tbl_user where id = $uid")->row();

        if (md5($this->input->post('old_pass')) != $userData->password) {
            $this->session->set_flashdata('msg', 'You have entered wrong old password.');
            redirect('Account');
        } else {
            if ($this->input->post('new_pass') == "") {
                $this->session->set_flashdata('msg', 'New password can not be blank.');
                redirect('Account');
            } else {
                $newPass = md5($this->input->post('new_pass'));
                $update = $this->db->query("update tbl_user set password = '$newPass' where id = $uid");
                if ($update) {
                    $this->session->set_flashdata('msg', 'Your password changed successfuly');
                    redirect('account');
                }
            }
        }
    }

    public function profile() {
        $user_session = ($_SESSION['logged_in']);
        $uid = $user_session['uid'];
        $data['userData'] = $this->db->query("select * from tbl_user where id = $uid")->row();
        
        $this->load->view('admin/supporter/header',$data);
        $this->load->view('admin/settings/profile');
        $this->load->view('admin/supporter/Footer');
    }
    

}
