<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

	public function index()
	{
		$this->load->view('index');
	}

    public function tambah_admin() {
		$this->load->view('tambahadmin');
	}

    public function aksi_simpanadmin() {
		$nmadmin = $this->input->post('nmadmin');
        $password = $this->input->post('pass');
		$data = array(
			'username' => $nmadmin,
            'password' => $password
		);

		$this->M_admin->tambah_admin($data);
		if($this->db->affected_rows()){
			redirect('welcome/tbladmin');
            
		} else {
			redirect('admin/tambah_admin');
		}
	}

    public function editadmin($kodeadmin){
		$data['admin'] = $this->M_admin->get_admin_by_id($kodeadmin)->row_array();
		$this->load->view('editadmin', $data);
	}

    public function aksi_editadmin(){
        $kodeadmin = $this->input->post('kodeadmin');
		$nncustomer = $this->input->post('nmadmin');
        $password = $this->input->post('pass');
		$data = array(
			'username' => $nncustomer,
            'Password' => $password
		);

		$this->M_admin->update_admin($data, $kodeadmin);

		 if($this->db->affected_rows()){
			redirect('welcome/tbladmin');
		} else {
			//redirect('welcome/editcus/'.$kodecus);
			echo "Data Gagal Di update";
		}

	}


    public function hapusdataadmin($kodeadmin){
		$this->M_admin->hapus_admin($kodeadmin);
		if($this->db->affected_rows()){
			redirect('welcome/tbladmin');
		} else {
			echo "Data gagal dihapus";
		}
	}


}
