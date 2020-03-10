<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jabatan extends CI_Model{
    public function get_data(){
        return $this->db->get('jabatan')->result_array();
    }
}