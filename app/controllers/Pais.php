<?php defined('BASEPATH') or exit('Acção não permitida');

class Pais extends CI_Controller
{
protected $data = [];

    public function __construct() {
        parent::__construct();
        if(!$this->ion_auth->is_admin()) redirect();
        $this->load->model('Pais_model');
        $this->data['class'] = strtolower(__CLASS__);
    }

    public function index()
    {
        if(!$this->ion_auth->logged_in()) redirect();
        $this->data['method'] = __FUNCTION__;
        $this->form_validation->set_rules('nome', 'Nome', 'required|is_unique[paises.nome]');

        if ($this->form_validation->run()) {
            $create_data = elements(array('nome'), $this->security->xss_clean($this->input->post()));

            if ($this->Pais_model->create($create_data)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }
        $this->data['items'] = $this->Pais_model->list();
        $this->load->view('layout', $this->data);
    }

	public function show($id) {
        if(!$this->ion_auth->logged_in()) redirect();
        $this->data['method'] = __FUNCTION__;
        $this->data['item'] = $this->Pais_model->get($id);
        $this->load->view('layout', $this->data);
	}

    public function update($id)
    {
        if(!$this->ion_auth->logged_in()) redirect();
        $this->data['method'] = 'index';
        $this->form_validation->set_rules('nome', 'Nome', 'required');

        if ($this->form_validation->run()) {
            $update_data = elements(array('nome'), $this->security->xss_clean($this->input->post()));

            if ($this->Pais_model->update($update_data, $id)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
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