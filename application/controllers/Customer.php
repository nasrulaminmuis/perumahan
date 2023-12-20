<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_cuss');
    }

	public function index()
	{
		$this->load->view('index');
	}

    public function nambah_customer() {
		$this->load->view('tambahcus');
	}

    public function aksi_simpancus() {
		$nncustomer = $this->input->post('nmcus');
		$notelp = $this->input->post('notel');
		$alamat = $this->input->post('alamcus');
        $pekerjaan = $this->input->post('pkj');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
		$data = array(
			'Nama' => $nncustomer,
			'No_telp' => $notelp,
			'alamat_cus' => $alamat,
            'pekerjaan' => $pekerjaan,
            'NIK_cus' => $nik,
            'Email' => $email,
            'Password' => $password
		);

		$this->M_cuss->nambah_customer($data);
		if($this->db->affected_rows()){
			echo "
            <script> 
            	alert('Data Customer Berhasil ditambahkan');
            	window.location.href = '" . base_url('welcome/tblcus') . "';
        	</script>
        	" ;
            
		} else {
			echo "
            <script> 
            	alert('Data Customer Gagal ditambahkan');
            	window.location.href = '" . base_url('customer/nambah_customer') . "';
        	</script>
        	" ;
		}
	}

    public function editcus($kodecus){
		$this->load->model('M_cuss');
		$data['customer'] = $this->M_cuss->get_data_by_id($kodecus)->row_array();
		$this->load->view('editcus', $data);
	}

    public function aksi_editcus(){
        $kodecus = $this->input->post('kodecus');
		$nncustomer = $this->input->post('nmcus');
		$notelp = $this->input->post('notel');
		$alamat = $this->input->post('alamcus');
        $pekerjaan = $this->input->post('pkj');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
		$data = array(
			'Nama' => $nncustomer,
			'No_telp' => $notelp,
			'alamat_cus' => $alamat,
            'pekerjaan' => $pekerjaan,
            'NIK_cus' => $nik,
            'Email' => $email,
            'Password' => $password
		);

		$this->M_cuss->update_datacustomer($data, $kodecus);
		
		//var_dump($this->M_perumahan->update_datacustomer($data, $kodecus));

		 if($this->db->affected_rows()){
			echo "
            <script> 
            	alert('Data Customer berhasil diupdate');
            	window.location.href = '" . base_url('welcome/tblcus') . "';
        	</script>
        	" ;
		} else {
			echo "
            <script> 
            	alert('Data Customer tidak berhasil diupdate');
            	window.location.href = '" . base_url('customer/editcus') . "';
        	</script>
        	" ;
			//redirect('welcome/editcus/'.$kodecus);
			//echo "Data Gagal Di update";
		}

	}


    public function hapusdatacus($kodecus){
		$this->M_cuss->hapus_datacus($kodecus);
		if($this->db->affected_rows()){
			redirect('welcome/tblcus');
		} else {
			echo "Data gagal dihapus";
		}
	}


}
