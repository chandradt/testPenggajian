<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model{
    public function get_data(){
        return $this->db->get('karyawan')->result_array();
    }

    public function set_data($data){
        $this->db->insert('karyawan', $data);
    }

    public function delete_data($nip, $table){
        $this->db->where($nip);
        $this->db->delete($table);
    }
}