<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_cuss');
		$this->load->model('M_admin');
        $this->load->model('M_rumah');
        $this->load->model('M_penjualan');
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function daftar()
	{
		$this->load->view('regiistrasi');
	}

	public function masukcus()
	{
		$this->load->view('login');
	}

	public function aksi_logincus()
    {
        $gmail = $this->input->post('gmail');
        $pass = $this->input->post('password');

        $cekusername = $this->M_login->cek_cus($gmail, $pass)->num_rows();
        if ($cekusername>0) {
            $data_session = array(
                'email' => $gmail,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('welcome/customer');
        } else {
            echo "Username dan password salah";
        }
    }

	public function masukadmin()
	{
		$this->load->view('loginadmin');
	}

	public function aksi_loginadmin()
    {
        $user = $this->input->post('username');
        $passs = $this->input->post('password');

        $cekadmin = $this->M_login->cek_admin($user, $passs)->num_rows();
        if ($cekadmin>0) {
            $data_session = array(
                'username' => $user,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect('welcome');
        } else {
            echo "Username dan password salah";
        }
    }

	public function tbladmin()
	{
        $data['admin'] = $this->M_admin->get_admin()->result_array();
        $this->load->view('tbladmin',$data);
	}

	public function tblcus()
	{
        $data['customer'] = $this->M_cuss->get_cus()->result_array();
        $this->load->view('tblcustomer',$data);
	}

    public function tblrumah()
	{
        $data['rumah'] = $this->M_rumah->get_all_rumah()->result_array();
        $this->load->view('tblrumah',$data);
	}

    public function tblpenjualan()
	{
        $data['penjualan'] = $this->M_penjualan->get_all_penjualan()->result_array();
        $this->load->view('tblpenjualan',$data);
	}

    public function home()
	{
        $data['rumah'] = $this->M_rumah->get_all_rumah()->result_array();
        $this->load->view('home',$data);
	}

    public function customer()
	{
        $data['rumah'] = $this->M_rumah->get_all_rumah()->result_array();
        $this->load->view('home',$data);
	}
    

}
