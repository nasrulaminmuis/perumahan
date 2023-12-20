<?php
class M_penjualan extends CI_Model {

    public function get_all_penjualan(){
        return $this->db->get('penjualan');
    }

    public function tambah_penjualan($data) {
        $this->db->insert('penjualan', $data);
    }

    public function hapus_data_penjualan($id) {
        $this->db->where('Id_Penjualan', $id);
        $this->db->delete('penjualan');
    }  

    public function update_penjualan($data, $id) {
        $this->db->where('Id_Penjualan', $id);
        $this->db->update('penjualan', $data);
    }

    public function get_data_by_id($kodepenjualan) {
        return $this->db->get_where('penjualan', array('Id_Penjualan' => $kodepenjualan));
    }
}
?>
