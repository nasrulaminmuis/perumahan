<?php
class rumah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_rumah');
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function tambah()
    {
        $this->load->view('tambahrumah');
    }

    public function proses_tambah()
    {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_rmh')) {
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
        } else {
            $data_upload = $this->upload->data();

            $file_name = $data_upload['file_name'];

            $tipe_rmh = $this->input->post('tipe_rmh');
            $harga = $this->input->post('harga');
            $alamat = $this->input->post('alamat');
            $fasilitas = $this->input->post('fasilitas');
            $kondisi = $this->input->post('kondisi');

            $data = array(
                'tipe_rmh' => $tipe_rmh,
                'harga' => $harga,
                'alamat' => $alamat,
                'fasilitas' => $fasilitas,
                'foto_rmh' => $file_name,  // Simpan nama file ke dalam database
                'kondisi' => $kondisi
            );

            $this->M_rumah->insert_rumah($data);

            // Redirect ke halaman setelah proses upload berhasil
            redirect('welcome/tblrumah');
        }
    }

    public function edit($Id_rumah)
    {
        $data['rumah'] = $this->M_rumah->get_rumah_by_id($Id_rumah);
        $this->load->view('editrumah', $data);
    }

    public function proses_edit()
    {
        $Id_rumah = $this->input->post('Id_rumah');
        $tipe_rmh = $this->input->post('tipe_rmh');
        $harga = $this->input->post('harga');
        $alamat = $this->input->post('alamat');
        $fasilitas = $this->input->post('fasilitas');
        $kondisi = $this->input->post('kondisi');
        $foto_rmh = $_FILES['foto_rmh']['name'];
        $fotolama = $this->input->post('gambarlama');

        if ($_FILES['foto_rmh']['error'] === 4) {
            $data = array(
                'tipe_rmh' => $tipe_rmh,
                'harga' => $harga,
                'alamat' => $alamat,
                'fasilitas' => $fasilitas,
                'foto_rmh' => $fotolama,
                'kondisi' => $kondisi
            );
        } else {
            $data = array(
                'tipe_rmh' => $tipe_rmh,
                'harga' => $harga,
                'alamat' => $alamat,
                'fasilitas' => $fasilitas,
                'foto_rmh' => $foto_rmh,
                'kondisi' => $kondisi
            );
        }

        if ($_FILES['foto_rmh']['error'] === 4) {
            $config['upload_path'] = './img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $fotolama;
        } else {
            $config['upload_path'] = './img/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $foto_rmh;
        }

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_rmh')) {
            $upload_data = $this->upload->data();
            $data['foto_rmh'] = $upload_data['file_name'];
            $this->M_rumah->update_rumah($Id_rumah, $data);
            redirect('welcome/tblrumah');
        } else {
            $upload_data = $this->upload->data();
            $data['foto_rmh'] = $upload_data['file_name'];
            $this->M_rumah->update_rumah($Id_rumah, $data);
            redirect('welcome/tblrumah');
        }
    }

    public function hapus($Id_rumah)
    {
        $this->M_rumah->delete_rumah($Id_rumah);
        redirect('welcome/tblrumah');
    }
}
