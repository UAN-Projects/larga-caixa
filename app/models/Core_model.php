<?php defined('BASEPATH') or exit('Acção não permitida');

class Core_model extends CI_Model {

    public function get($tabela = NULL, $condicao = NULL) {
        if ($tabela) {
            if (is_array($condicao)) {
                $this->db->where($condicao);
            }
            return $this->db->get($tabela)->result();
        } else {
            return FALSE;
        }
    }

    public function getById($tabela = NULL, $id = NULL) {
        if ($tabela && $id) {
            $this->db->where(array('id' => $id));
            $this->db->limit(1);
            return $this->db->get($tabela)->row();
        } else {
            return FALSE;
        }
    }

    public function insert($tabela = NULL, $data = NULL) {
        if($this->db->insert($tabela, $data)) {
            return $this->db->insert_id();
        } else {
            return TRUE;
        }
    }

    public function updateById($tabela = NULL, $data = NULL, $id = NULL) {
        if ($tabela && is_array($data)) {
            if($this->db->update($tabela, $data, array('id' => $id))) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    public function update($tabela = NULL, $data = NULL, $condicao = NULL) {
        if ($tabela && is_array($data) && is_array($condicao)) {
            if($this->db->update($tabela, $data, $condicao)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function deleteById($tabela = NULL, $id = NULL) {
        $this->db->db_debug = FALSE;
        if ($tabela && is_array($condicao)) {
            $status = $this->db->delete($tabela, array('id' => $id));
            $error = $this->db->error();
            $this->db->db_debug = TRUE;
            if (!$status) {
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    public function delete($tabela = NULL, $condicao = NULL) {
        $this->db->db_debug = FALSE;
        if ($tabela && is_array($condicao)) {
            $status = $this->db->delete($tabela, $condicao);
            $error = $this->db->error();
            $this->db->db_debug = TRUE;
            if (!$status) {
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            return FALSE;
        }
    }

    public function getFiles($userId = NULL) {
        $this->db->select('ficheiros.id, ficheiros.ficheiro');
        $this->db->from('ficheiros');
        $this->db->join('users_ficheiros', 'ficheiros.id = users_ficheiros.ficheiro_id');
        return $this->db->where(array('ficheiros.user_id' => $userId))->limit(1)->get()->row();
    }

    public function hasAccess($fileId, $userId) {
        $this->db->from('users_ficheiros');
        return $this->db->where(array('user_id' => $userId, 'ficheiro_id' => $fileId))->limit(1)->get()->row();
    }

    public function getFilesAccess($user_id) {
        $ficheiros = [];
        $getFiles = $this->db->get('ficheiros')->result();

        foreach ($getFiles as $getFile) {
            $fileAccess = $this->hasAccess($getFile->id, $user_id);
            if($getFile->user_id == $user_id || $fileAccess) {
                array_push($ficheiros,array(
                    'user_id' => $getFile->user_id,
                    'preco' => $getFile->preco,
                    'ficheiro' => $getFile->ficheiro,
                    'id' => $getFile->id,
                ));
            }
        }
        return $ficheiros;
    }
}




