<?php defined('BASEPATH') or exit('Acção não permitida');

class Pais extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->model('Pais_model');
    }

    public function index()
    {
        if(!$this->ion_auth->logged_in()) redirect('');
        $data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__);
        $this->form_validation->set_rules('pais', 'Pais', 'required');

        if ($this->form_validation->run()) {
            $create_data = elements(array('pais'), $this->security->xss_clean($this->input->post()));

            if ($this->Pais_model->create($create_data)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Registado com sucesso!", 1);
            } else {
                $this->session->set_flashdata('form_error', $this->ion_auth->errors());
            }
        }
        $this->load->view('layout',
            array_merge($data, 
                array('paises' => $this->Pais_model->list()),
            )
        );

        // if($this->session->flashdata('form_error') || validation_errors() ) {}
    }

	public function show($id=NULL) {
		$data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__,
			'user' => $this->ion_auth->user($id)->row(),
			'users' => $this->ion_auth->users()->result(),
			'grupo' => $this->ion_auth->get_users_groups($id)->row(),
		);
		$this->load->view('layout', $data);
	}


    public function update($user_id = NULL)
    {

        if (!$user_id || !$this->ion_auth->user($user_id)->row()) {
            $this->session->set_tempdata('notify', __CLASS__.",error, Não tem permissão para executar essa operação!", 1);
            redirect('user');
        } else {

            $this->form_validation->set_rules('first_name', '', 'trim|required');
            $this->form_validation->set_rules('phone', '', 'required');
            $this->form_validation->set_rules('email', '', 'trim|required');
            $this->form_validation->set_rules('password', 'Senha', 'min_length[5]|max_length[255]');
            $this->form_validation->set_rules('confirm_password', 'Confirmar Senha', 'matches[password]');

            if ($this->form_validation->run()) {

                $data = elements(array('first_name', 'email', 'phone', 'password', 'username'), $this->input->post());

                if (!$this->ion_auth->is_admin()) unset($data['active']);

                $data = $this->security->xss_clean($data);
                $password = $this->input->post('password');

                if (!$password) unset($data['password']);

                if ($this->ion_auth->update($user_id, $data)) {

                    $perfil_usuario_db = $this->ion_auth->get_users_groups($user_id)->row();
                    $perfil_usuario_post = $this->input->post('grupo');

                    if ($this->ion_auth->is_admin()) {
                        if ($perfil_usuario_post != $perfil_usuario_db->id) {
                            $this->ion_auth->remove_from_group($perfil_usuario_db->id, $user_id);
                            $this->ion_auth->add_to_group($perfil_usuario_post, $user_id);
                        }
                    }
                } else {
                    $this->session->set_flashdata('erro', 'Erro ao salvar os dados!');
                }
                if ($this->ion_auth->is_admin()) {
                    $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso!');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso!');
                    redirect('user');
                }
            } else {
				$data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__,
					'user' => $this->ion_auth->user($user_id)->row(),
                    'users' => $this->ion_auth->users()->result(),
                    'grupo' => $this->ion_auth->get_users_groups($user_id)->row(),
				);
				$this->load->view('layout', $data);
            }
        }
    }


    public function delete($user_id)
    {
        if (!$this->ion_auth->is_admin()) {
            $this->ion_auth->delete_user($user_id);
            redirect('user');
        }
    }
}