<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ficheiro_model extends CI_Model {
    
    protected $table = 'ficheiros';

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