<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_payroll extends CI_Controller {
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('adminDasboard');
		$this->load->view('template/footer');
    }
    
    public function tambahJabatan()
	{
		$this->load->view('v_tambahJabatan');
	}

	public function getDataJabatan()
	{
		$this->load->model('m_jabatan');
		$data['jabatan'] =  $this->m_jabatan->get_data();
		
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_jabatan', $data);
		$this->load->view('template/footer');
		
	}

    public function tambahKaryawan()
	{
		$nip			=	$this->input->post('nip');
		$nama			=	$this->input->post('nama');
		$jeniskelamin	=	$this->input->post('jeniskelamin');
		$tanggallahir	=	$this->input->post('tanggallahir');
		$telpon			=	$this->input->post('telpon');
		$email			=	$this->input->post('email');
		$alamat			=	$this->input->post('alamat');
		$masakerja		=	$this->input->post('masakerja');
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jenis_kelamin' => $jeniskelamin,
			'tanggal_lahir' => $tanggallahir,
			'telpon' => $telpon,
			'email' => $email,
			'alamat' => $alamat,
			'masa_kerja' => $masakerja	
		);
		$this->m_karyawan->set_data($data, 'karyawan');
		redirect('c_payroll/getDataKaryawan');
	}

	public function ubahDataKAryawwan(){

	}
	public function hapusKaryawan($id){
		$nip = array('nip' => $id);
		$this->m_karyawan->delete_data($nip, 'karyawan');
		redirect('c_payroll/getDataKaryawan');
	}

	public function getDataKaryawan()
	{
		$this->load->model('m_karyawan');
		$data['karyawan'] =  $this->m_karyawan->get_data();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_karyawan', $data);
		$this->load->view('template/footer');
	}
    
	public function addRules()
	{
		$this->load->view('v_tambahAturan');
	}
	
	public function getDataAturan()
	{
		$this->load->model('m_aturan');
		$data['aturan'] =  $this->m_aturan->get_data();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('v_aturan', $data);
		$this->load->view('template/footer');
	}
}