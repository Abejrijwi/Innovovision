<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Authcontroller.php');

class Welcome extends Authcontroller {

    public function index() {

        $this->load->view('admin/supporter/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/supporter/footer');
    }

    public function AddSettings() {

        if ($_FILES['projectlogo']['name'] == "") {
            $projectLogo = "No Image";
        } else {
            //create directory in public folder
            $store = "project_logo/";
            if (!file_exists("public/" . $store)) {
                @mkdir("public/" . $store, 0777);
            }

            //upload image

            $config['upload_path'] = './public/project_logo/';
            $config['allowed_types'] = '*';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('projectlogo')) {

                //Resize image
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 110;
                $config['height'] = 140;

                $this->load->library('image_lib', $config);

                if ($this->image_lib->resize()) {
                    $projectLogo = $this->upload->file_name;
                }
            }
        }

        $this->form_validation->set_rules('project_name', 'Project Name', 'required');
        $this->form_validation->set_rules('projecturl', 'URL', 'required');
        $this->form_validation->set_rules('descrpton', 'Description', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('prmailid', 'Primary Email Id', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('paddress', 'Permanent Address', 'required');
        if ($this->form_validation->run() == TRUE) {
            $settingDataArray = array(
                'project_name' => $this->input->post('project_name'),
                'project_url' => $this->input->post('projecturl'),
                'project_desc' => $this->input->post('descrpton'),
                'project_logo' => $projectLogo,
                'mobile' => $this->input->post('mobile'),
                'telephone' => $this->input->post('tel'),
                'fax' => $this->input->post('fax'),
                'primary_email' => $this->input->post('prmailid'),
                'alt_email' => $this->input->post('altmailid'),
                'permanent_addrs' => $this->input->post('paddress'),
                'temp_addrs' => $this->input->post('taddress')
            );
            $this->User_Model->AddSettingData($settingDataArray);
        } else {
            $this->settings();
        }
    }

    /* ------------------------------Manage visitors contcats and query----------------------------------------- */

    public function manage_contacts() {
        $this->data['contact'] = $this->db->query("select * from tbl_contact order by id desc")->result();
        $this->load->view('admin/supporter/header', $this->data);
        $this->load->view('admin/manage_contacts');
        $this->load->view('admin/supporter/footer');
    }

    public function delete_contact($id) {
        $flag = $this->db->query("DELETE FROM `tbl_contact` WHERE id = $id");
        if ($flag) {
            $this->session->set_flashdata('message', 'Visitors Contact Details Successfully Deleted.');
        } else {
            $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
        }

        redirect("welcome/manage_contacts");
    }

    /* ------------------------------Manage User Module----------------------------------------- */

//  Showing users list on admin dashboard

    public function manage_users() {

        $this->data['userlist'] = $this->User_Model->GetAllUserList();

        $this->load->view('admin/supporter/header', $this->data);
        $this->load->view('admin/manage_users');
        $this->load->view('admin/supporter/footer');
    }

// Showing adding user page on admin dashbaord

    public function user() {

        $this->data['role'] = $this->db->get('tbl_user_type')->result();
        $this->load->view('admin/supporter/header', $this->data);
        $this->load->view('admin/user');
        $this->load->view('admin/supporter/footer');
    }

//    Submit user's data to database by admin dashboard

    public function user_process() {

//        if ($_FILES['profilepic']['name'] == "") {
//            $image = "No Image";
//        } else {
//
//            //create directory in public folder
//            $store = "user_profile/";
//            if (!file_exists("public/" . $store)) {
//                @mkdir("public/" . $store, 0777);
//            }
//
//            //upload image
//
//            $config['upload_path'] = './public/user_profile/';
//            $config['allowed_types'] = '*';
//            $config['encrypt_name'] = TRUE;
//
//            $this->load->library('upload', $config);
//            $this->upload->initialize($config);
//            if ($this->upload->do_upload('profilepic')) {
//
//                //Resize image
//                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;
//                $config['maintain_ratio'] = FALSE;
//                $config['width'] = 110;
//                $config['height'] = 140;
//
//                $this->load->library('image_lib', $config);
//
//                if ($this->image_lib->resize()) {
//                    $image = $this->upload->file_name;
//                }
//            }
//        }
//        
        //insert into database
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('gndr', 'Gender', 'required');
        $this->form_validation->set_rules('mailid', 'Eamil Id', 'required|valid_email|xss_clean');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == TRUE) {
            $DefaultPassword = ($this->input->post('fname') . rand());
            $userDataArray = array(
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('lname'),
                'gender' => $this->input->post('gndr'),
                'image' => $image,
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('mailid'),
                'address' => $this->input->post('address'),
                'dob' => $this->input->post('dob'),
                'password' => md5($DefaultPassword),
                'utype' => $this->input->post('utype'),
            );

            $this->User_Model->AddUserProcess($userDataArray, $DefaultPassword);
        } else {
            $this->user();
        }
    }

    /* ------------------------------------------------------------------------------------------- */

    //Setting starts here 

    public function settings() {
        $this->data['contents'] = $this->db->query("select * from tbl_contents")->result();
        $this->load->view('admin/supporter/Header', $this->data);
        $this->load->view('admin/settings/setting');
        $this->load->view('admin/supporter/Footer');
    }

    public function updateAddress() {

        $contact = $this->input->post("address");
        $flag = $this->db->query("UPDATE `tbl_contents` SET `content`='$contact' where id=2");

        if ($flag) {
            $this->session->set_flashdata('message', 'Address Successfull Updated !');
        } else {
            $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
        }
        redirect("welcome/settings");
    }

    public function save_about_content() {

        $about = $this->input->post("about_contnt");
        $flag = $this->db->query("UPDATE `tbl_contents` SET `content`='$about' where id=1");

        if ($flag) {
            $this->session->set_flashdata('message', 'About Content Successfull Updated !');
        } else {
            $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
        }

        redirect("welcome/settings");
    }

    public function updateEmail() {

        $email = $this->input->post("email");
        $flag = $this->db->query("UPDATE `tbl_contents` SET `content`='$email' where id=3");

        if ($flag) {
            $this->session->set_flashdata('message', 'Email Content Successfull Updated !');
        } else {
            $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
        }

        redirect("welcome/settings");
    }

    public function updateCopy() {

        $copy = $this->input->post("copy_right");
        $flag = $this->db->query("UPDATE `tbl_contents` SET `content`='$copy' where id=4");

        if ($flag) {
            $this->session->set_flashdata('message', 'About Content Successfull Updated !');
        } else {
            $this->session->set_flashdata('err_message', 'Something Went Wrong! Please try again after some time.');
        }

        redirect("welcome/settings");
    }

    public function services() {

        $this->load->view('admin/supporter/header');
        $this->load->view('admin/service');
        $this->load->view('admin/supporter/footer');
    }

    public function service_process() {

        if ($_FILES['logo']['name'] != "") {
            $config['upload_path'] = "./public/admin/services_img/";
            $config['allowed_types'] = '*';
            $config['max_size'] = '2048000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode(array('st' => 0, 'msg' => "", "upload_msg" => $error));
            } else {
                $upload_data = $this->upload->data();
                $arr_image = array('upload_data' => $this->upload->data());
                $logo['image'] = $upload_data['file_name'];
            }
        }
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'logo' => $logo['image']
        );

        $this->db->insert('tbl_service', $data);
        $this->session->set_flashdata('message', 'About Services Successfull!');
        redirect("welcome/services");



//        $this->form_validation->set_rules('tittle', 'Tittle', 'required');
//        $this->form_validation->set_rules('description', 'Description', 'required');
//
//        if ($this->form_validation->run() == FALSE) {
//
//            $userDataArray = array(
//                'tittle' => $this->input->post('tittle'),
//                'description' => $this->input->post('description')
//            );
//
//            $this->load->view('admin/supporter/header');
//            $this->load->view('admin/service', $userDataArray);
//            $this->load->view('admin/supporter/footer');
//            
//        } else {
//
//            if ($_FILES['logo']['name'] != "") {
//                $config['upload_path'] = "./public/admin/services_img/";
//                $config['allowed_types'] = '*';
//                $config['max_size'] = '2048000';
//                $config['max_width'] = '1024';
//                $config['max_height'] = '768';
//                $config['encrypt_name'] = TRUE;
//                $config['remove_spaces'] = TRUE;
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);
//
//                if (!$this->upload->do_upload('logo')) {
//                    $error = array('error' => $this->upload->display_errors());
//                    echo json_encode(array('st' => 0, 'msg' => "", "upload_msg" => $error));
//                } else {
//                    $upload_data = $this->upload->data();
//                    $arr_image = array('upload_data' => $this->upload->data());
//                    $logo['image'] = $upload_data['file_name'];
//                }
//            }
//            $data = array(
//                'title' => $this->input->post('title'),
//                'description' => $this->input->post('description'),
//                'logo' => $logo['image']
//            );
//
//            $this->db->insert('tbl_service', $data);
//            echo json_encode(array('st' => 1, 'msg' => "SUH successfully added"));
//        }
    }

    public function manage_services() {

        $this->data['servicelist'] = $this->db->query("select * from tbl_service")->result();
        $this->load->view('admin/supporter/header');
        $this->load->view('admin/manage_service', $this->data);
        $this->load->view('admin/supporter/footer');
    }

    public function service_view($id) {

        $this->data['servicelist'] = $this->db->query("select * from tbl_service where id = $id")->first_row();
        $this->load->view('admin/supporter/header');
        $this->load->view('admin/manage_service_view', $this->data);
        $this->load->view('admin/supporter/footer');
    }

    public function service_edit($id) {

        $this->data['servicelist'] = $this->db->query("select * from tbl_service where id = $id")->first_row();
        $this->load->view('admin/supporter/header');
        $this->load->view('admin/manage_service_edit', $this->data);
        $this->load->view('admin/supporter/footer');
    }

    public function service_process_edit() {

        $id = $this->input->post('id');
        if ($_FILES['logo']['name'] != "") {
            $config['upload_path'] = "./public/admin/services_img/";
            $config['allowed_types'] = '*';
            $config['max_size'] = '2048000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                echo json_encode(array('st' => 0, 'msg' => "", "upload_msg" => $error));
            } else {
                $upload_data = $this->upload->data();
                $arr_image = array('upload_data' => $this->upload->data());
                $logo['image'] = $upload_data['file_name'];
            }
        }
        $this->data['servicelist'] = $this->db->query("select logo from tbl_service where id = $id")->first_row();

        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'logo' => $logo['image']
        );

        $this->db->where('id', $id);
        $this->db->update('tbl_service', $data);
        @ unlink(FCPATH . './public/admin/services_img/' . $this->data['servicelist']->logo);
        $this->session->set_flashdata('message', 'Services Update Successfull!');
        redirect("welcome/manage_services");
    }

    public function delete_services($id) {

        $this->data['servicelist'] = $this->db->query("select logo from tbl_service where id = $id")->first_row();
        @ unlink(FCPATH . './public/admin/services_img/' . $this->data['servicelist']->logo);
        $this->session->set_flashdata('message', 'Services Delete Successfull!');
        $this->db->where('id', $id);
        $this->db->delete('tbl_service');
        redirect("welcome/manage_services");
    }

}
