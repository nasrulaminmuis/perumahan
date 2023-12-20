<?php 
class M_admin extends CI_Model{

    public function get_admin(){
        return $this->db->get('admin');
    }

    public function tambah_admin($data) {
        $this->db->insert('admin',$data);
    }

    public function hapus_admin($id) {
        $this->db->where('id_admin',$id);
        $this->db->delete('admin');
    }  

    public function update_admin($data,$id) {
        $this->db->where('id_admin',$id);
        $this->db->update('admin',$data);
    }

    public function get_admin_by_id($kodecus) {
        return $this->db->get_where('admin', array('id_admin' => $kodecus));
    }
}

?>