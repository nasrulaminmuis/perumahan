<?php 
class M_cuss extends CI_Model{

    public function get_cus(){
        return $this->db->get('customer');
    }

    public function nambah_customer($data) {
        $this->db->insert('customer',$data);
    }

    public function hapus_datacus($id) {
        $this->db->where('Id_Cus',$id);
        $this->db->delete('customer');
    }  

    public function update_datacustomer($data,$id) {
        $this->db->where('Id_Cus',$id);
        $this->db->update('customer',$data);
    }

    public function get_data_by_id($kodecus) {
        return $this->db->get_where('customer', array('Id_Cus' => $kodecus));
    }
}

?>