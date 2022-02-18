<?php defined('BASEPATH') or exit('Acção não permitida');

class Ficheiro extends CI_Controller
{
    protected $data = [];

    public function __construct() {
        parent::__construct();
        if(!$this->ion_auth->logged_in()) redirect();
        $this->load->model('Ficheiro_model');
        $this->data['class'] = strtolower(__CLASS__);
    }

    public function index()
    {
        $this->data['method'] = __FUNCTION__;
        $this->form_validation->set_rules('descricao', 'Nome', 'required');
        $this->form_validation->set_rules('preco', 'Preço', 'required');

        if ($this->form_validation->run()) {
            $create_data = elements(array('descricao', 'preco'), $this->security->xss_clean($this->input->post()));

            $config['upload_path'] = './uploads/ficheiros/';
            $config['allowed_types'] = 'jpg|png|mp3|mp4';
            $config['max_size']     = '1000';
            $config['max_width'] = '10240';
            $config['max_height'] = '7680';
            $config['file_name'] = date("Y_m_d_H_i_s")."_".$this->ion_auth->user()->row()->username;
            $config['overwrite'] = TRUE;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('ficheiro')) {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }else{
                $data = $this->upload->data();
                $create_data['user_id'] = $this->ion_auth->user()->row()->id;
                $create_data['ficheiro'] = $data['file_name'];
                if ($this->Ficheiro_model->create($create_data)) {
                    $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
                } else {
                    $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
                }
            }
        }
        $this->data['items'] = $this->Ficheiro_model->list();
        $this->load->view('layout', $this->data);
    }

	public function show($id) {
        $this->data['method'] = __FUNCTION__;
        $this->data['item'] = $this->Pais_model->get($id);
        $this->load->view('layout', $this->data);
	}

    public function update($id)
    {
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