<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penjualan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_penjualan');
    }

    public function index(){
        $this->load->view('index');
    }

    public function tambah_penjualan(){
        $dataPenjualan = $this->M_penjualan->get_all_penjualan();
        $this->load->view('tambahpenjualan', ['penjualan' => $dataPenjualan]);
    }

    public function aksi_tambahpenjualan(){
        $tglPengambilan = $this->input->post('Tgl_Pengambilan');
        $totalByr = $this->input->post('Total_Byr');
        $tglJthTempo = $this->input->post('Tgl_JthTempo');
        $pembayaranCicilan = $this->input->post('Pembayaran_Cicilan');
        $downPayment = $this->input->post('Down_Payment');
        $bunga = $this->input->post('Bunga');
        $idAdmin = $this->input->post('Id_admin');
        $idRumah = $this->input->post('Id_rumah');
        $idCus = $this->input->post('Id_Cus');

        $data = array(
            'Tgl_Pengambilan' => $tglPengambilan,
            'Total_Byr' => $totalByr,
            'Tgl_JthTempo' => $tglJthTempo,
            'Pembayaran_Cicilan' => $pembayaranCicilan,
            'Down_Payment' => $downPayment,
            'Bunga' => $bunga,
            'Id_admin' => $idAdmin,
            'Id_rumah' => $idRumah,
            'Id_Cus' => $idCus
        );

        $this->M_penjualan->tambah_penjualan($data);

        if($this->db->affected_rows()){
            redirect('welcome/tblpenjualan');
            
		} else {
			redirect('penjualan/tambah_penjualan');
		}
    }

    public function edit_penjualan($idPenjualan){
        $this->load->model('M_penjualan');
        $data['penjualan'] = $this->M_penjualan->get_data_by_id($idPenjualan)->row_array();
        $this->load->view('editpenjualan', $data);
    }

    public function aksi_edit_penjualan(){
        $idPenjualan = $this->input->post('Id_penjualan');
        $tglPengambilan = $this->input->post('Tgl_Pengambilan');
        $totalByr = $this->input->post('Total_Byr');
        $tglJthTempo = $this->input->post('Tgl_JthTempo');
        $pembayaranCicilan = $this->input->post('Pembayaran_Cicilan');
        $downPayment = $this->input->post('Down_Payment');
        $bunga = $this->input->post('Bunga');
        $idAdmin = $this->input->post('Id_admin');
        $idRumah = $this->input->post('Id_rumah');
        $idCus = $this->input->post('Id_Cus');

        $data = array(
            'Tgl_Pengambilan' => $tglPengambilan,
            'Total_Byr' => $totalByr,
            'Tgl_JthTempo' => $tglJthTempo,
            'Pembayaran_Cicilan' => $pembayaranCicilan,
            'Down_Payment' => $downPayment,
            'Bunga' => $bunga,
            'Id_admin' => $idAdmin,
            'Id_rumah' => $idRumah,
            'Id_Cus' => $idCus
        );

        $this->M_penjualan->update_penjualan($data, $idPenjualan);

        if($this->db->affected_rows()){
            redirect('welcome/tblpenjualan');
            
		} else {
			redirect('penjualan/tambah_penjualan');
		}
    }

    public function hapus_data_penjualan($idPenjualan){
        $this->M_penjualan->hapus_data_penjualan($idPenjualan);

        if($this->db->affected_rows()){
            redirect('welcome/tblpenjualan');
        }else{
            echo "Data gagal dihapus";
        }
    }
}
