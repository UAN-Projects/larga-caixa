<?php defined('BASEPATH') or exit('Acção não permitida');

require('BaseController.php');

class Ficheiro extends BaseController {

    public function __construct() {
        parent::__construct();
        if(!$this->ion_auth->logged_in()) redirect();
        $this->load->model('Ficheiro_model');
        $this->table = 'ficheiros';
        $this->data['class'] = strtolower(__CLASS__);
    }

    public function list() {
        $this->data['method'] = 'list';
        $this->data['items'] = $this->Core_model->get($this->table);
        $this->load->view('layout', $this->data);
    }

    public function index()
    {
        $this->data['method'] = __FUNCTION__;
        $this->form_validation->set_rules('descricao', 'Nome', 'required');
        $this->form_validation->set_rules('preco', 'Preço', 'required');
        $this->form_validation->set_rules('conta', 'Conta', 'required');

        if ($this->form_validation->run()) {
            $create_data = elements(array('descricao', 'preco', 'conta'), $this->security->xss_clean($this->input->post()));

            $config['upload_path'] = './uploads/ficheiros/';
            $config['allowed_types'] = 'jpg|png|wmv|mp4|avi|mov';
            $config['max_size']     = '102400';
            $config['file_name'] = date("Y_m_d_H_i_s")."_".$this->ion_auth->user()->row()->username;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ficheiro')) {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }else{
                $data = $this->upload->data();
                $create_data['user_id'] = $this->ion_auth->user()->row()->id;
                $create_data['ficheiro'] = $data['file_name'];
                print_r($create_data );
                $insertedId = $this->Core_model->insert($this->table, $create_data);
                if ($insertedId) {
                    $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                } else {
                    $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
                }
            }
        }

        $this->data['items'] = $this->Core_model->getFilesAccess($this->data['user_corrent']);
        $this->load->view('layout', $this->data);
    }

	public function show($id) {
        $this->data['method'] = __FUNCTION__;
        $this->data['item'] = $this->Core_model->getById($this->table, $id);
        $this->load->view('layout', $this->data);
	}

    public function update($id)
    {
        $this->data['method'] = 'show';
        $this->form_validation->set_rules('preco', 'Preço', 'required');
        $this->form_validation->set_rules('conta', 'Conta', 'required');
        $this->form_validation->set_rules('descricao', 'Nome', 'required');

        if ($this->form_validation->run()) {
            $update_data = elements(array('preco', 'conta', 'descricao'), $this->security->xss_clean($this->input->post()));

            if ($this->data['item'] = $this->Core_model->updateById($this->table, $update_data, $id)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }

        $this->data['item'] = $this->Core_model->getById($this->table, $id);
        $this->load->view('layout', $this->data);
    }


    public function delete($id)
    {
        ($this->Pais_model->delete($id))
        ? $this->session->set_flashdata('sucesso', 'Sucesso!') 
        : $this->session->set_flashdata('error', 'Erro na operação!');
        redirect('pais');
    }

    public function buy($id)
    {
        $this->data['method'] = 'show';
        $this->form_validation->set_rules('conta_origem', 'Origem', 'required');
        $this->form_validation->set_rules('conta_destino', 'Destino', 'required');
        $this->form_validation->set_rules('valor', 'Valor', 'required');

        if ($this->form_validation->run()) {
            $update_data = elements(array('conta_origem', 'conta_destino', 'valor'), $this->security->xss_clean($this->input->post()));
            $this->load->library("nusoap"); 
            $url = "http://localhost:4002/server.php?wsdl";
            $client = new nusoap_client($url, 'wsdl');
            $err = $client->getError();

            if ($err) {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }else{
                if($client->fault) {
                    $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
                }else{
                    $result = $client->call('movimentar', array($update_data['conta_origem'], $update_data['conta_destino'], $update_data['valor']));
                    if($result) {
                        $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                        $userFileData = array(
                            'user_id' => $this->data['user_corrent'],
                            'ficheiro_id' => $id,
                        );
                        if($this->Core_model->insert('users_ficheiros', $userFileData)) {
                            $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                        } else {
                            $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
                        }
                    } else {
                        $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
                    }
                }
            }
        }

        $this->show($id);
    }
}