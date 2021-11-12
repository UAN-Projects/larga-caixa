<?php defined('BASEPATH') or exit('Acção não permitida');

class Pais_model extends CI_Model {
    
    protected $table = 'paises';

    public function list() {
        return $this->db->get($this->table)->result();
    }
    
    public function get($id) {
        return $this->db->from($this->table)->where(array('id' => $id))->limit(1)->get()->row();
    }

    public function create($data) {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id) {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
    
    public function delete($id) {
        return $this->db->delete($this->table, array('id' => $id));
    }

}