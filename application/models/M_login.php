<?php 
class M_login extends CI_Model{

    public function cek_cus($g, $p){
        return $this->db->get_where('customer', array('email'=>$g, 'password'=>$p));
    }

    public function cek_admin($s, $n){
        return $this->db->get_where('admin', array('username'=>$s, 'password'=>$n));
    }

    public function get_cus(){
        return $this->db->get('customer');
        // perintah diatas sama seperti select * form tbl_produk
    }

    public function nambah_customer($data) {
        $this->db->insert('customer',$data);
    }
}

?>