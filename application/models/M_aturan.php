<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_aturan extends CI_Model{
    public function get_data(){
        return $this->db->get('aturan')->result_array();
    }
}