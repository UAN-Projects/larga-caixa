<?php defined('BASEPATH') or exit('Acção não permitida');

class Pais extends CI_Controller
{
    protected $data = [];
    protected $table;

    public function __construct() {
        parent::__construct();
        // if(!$this->ion_auth->is_admin()) redirect();
        if(!$this->ion_auth->logged_in()) redirect();
        $this->load->model('Pais_model');
        $this->load->model('Core_model');
        $this->data['class'] = strtolower(__CLASS__);
        $this->table = 'paises';
    }

    public function index()
    {
        
        $this->data['method'] = __FUNCTION__;
        $this->form_validation->set_rules('nome', 'Nome', 'required|is_unique[paises.nome]');

        if ($this->form_validation->run()) {
            $insert_data = elements(array('nome'), $this->security->xss_clean($this->input->post()));
            $insertedId = $this->Core_model->insert($this->table, $insert_data);
            if ($insertedId) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                redirect(strtolower(__CLASS__)."/show/".$insertedId);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }
        $this->data['items'] = $this->Core_model->get($this->table);
        $this->load->view('layout', $this->data);
    }

	public function show($id) {
        $this->data['method'] = __FUNCTION__;
        $this->data['item'] = $this->Core_model->getById($this->table, $id);
        $this->load->view('layout', $this->data);
	}

    public function update($id)
    {
        $this->data['method'] = 'index';
        $this->form_validation->set_rules('nome', 'Nome', 'required');

        if ($this->form_validation->run()) {
            $update_data = elements(array('nome'), $this->security->xss_clean($this->input->post()));

            if ($this->Core_model->updateById($this->table, $update_data, $id)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                redirect(strtolower(__CLASS__)."/show/".$id);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }

        $this->data['items'] = $this->Pais_model->list();
        $this->load->view('layout', $this->data);
    }


    public function delete($id)
    {
        ($this->Pais_model->delete($id))
        ? $this->session->set_flashdata('sucesso', 'Sucesso!') 
        : $this->session->set_flashdata('error', 'Erro na operação!');
        redirect('pais');
    }
}