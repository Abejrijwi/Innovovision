<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model {

    public function GetAllUserList() {
        return $this->db->get('tbl_user')->result();
    }

}
