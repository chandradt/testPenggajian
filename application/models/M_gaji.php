<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gaji extends CI_Model{
    public function get_data(){
        return $this->db->get('gaji')->result_array();
    }
}