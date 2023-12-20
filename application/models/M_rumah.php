<?php
class M_rumah extends CI_Model {
    
    public function get_all_rumah() {
        return $this->db->get('rumah');
    }

    public function insert_rumah($data) {
        $this->db->insert('rumah', $data);
    }

    public function get_rumah_by_id($Id_rumah) {
        $query = $this->db->get_where('rumah', array('Id_rumah' =>$Id_rumah));
        return $query->row();
    }

    public function update_rumah($Id_rumah, $data ) {
        $this->db->where('Id_rumah', $Id_rumah);
        $this->db->update('rumah', $data);
    }

    public function delete_rumah($Id_rumah) {
        $this->db->where('Id_rumah', $Id_rumah);
        $this->db->delete('rumah');
    }

    public function edit($Id_rumah) {
        $data['rumah'] = $this->rumah_model->get_rumah_for_edit($Id_rumah);
        $this->load->view('crud_rumah/edit', $data);
    }
    public function get_rumah_for_edit($Id_rumah) {
        $query = $this->db->get_where('rumah', array('id' => $Id_rumah));
        return $query->row_array();
    }
    
}
