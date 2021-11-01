<?php defined('BASEPATH') or exit('Acção não permitida');

class User extends CI_Controller
{

    public function index()
    {
        if($this->ion_auth->logged_in()) redirect('dashboard');
        
        $this->form_validation->set_rules('username', '', 'trim');
        $this->form_validation->set_rules('first_name', '', 'trim|required');
        $this->form_validation->set_rules('email', '', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Senha', 'required|min_length[5]|max_length[255]');
        $this->form_validation->set_rules('confirm_password', 'Confirmar Senha', 'matches[password]');

        if ($this->form_validation->run()) {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $username = $this->security->xss_clean($this->input->post('username'));

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'username' => $this->input->post('username'),

            );
            $group = array($this->input->post('perfil_usuario'));

            $additional_data = $this->security->xss_clean($additional_data);

            $group = $this->security->xss_clean($group);

            if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
                $this->session->set_flashdata('sucess', 'Dados salvos com sucesso');
                $this->load->view('auth', $data);
            } else {
                $this->session->set_flashdata('error', 'Erro ao salvar os dados');
            }
        }
		$data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__,
			'users' => $this->ion_auth->users()->result()
        );
		$this->load->view('auth', $data);
		// $this->load->view('layout', $data);
        // $this->load->view('auth',
        //     array_merge($data, 
        //         array('users' => $this->ion_auth->users()->result()),
        //     )
        // );
    }

	public function show($id=NULL) {
		$data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__,
			'user' => $this->ion_auth->user($id)->row(),
			'users' => $this->ion_auth->users()->result(),
			'grupo' => $this->ion_auth->get_users_groups($id)->row(),
		);
		$this->load->view('layout', $data);
	}


    public function edit($user_id = NULL)
    {

        if (!$this->ion_auth->is_admin()) {
            if ($this->session->userdata['user_id'] != $user_id) {
                $this->session->set_flashdata('info', 'Você não pode alterar um usuario diferente do seu!');
                redirect('');
            }
        }

        if (!$user_id || !$this->ion_auth->user($user_id)->row()) {
            $this->session->set_flashdata('error', 'Usuário não encontrado');
            redirect('user');
        } else {

            $this->form_validation->set_rules('first_name', '', 'trim|required');
            $this->form_validation->set_rules('email', '', 'trim|required');
            $this->form_validation->set_rules('password', 'Senha', 'min_length[5]|max_length[255]');
            $this->form_validation->set_rules('confirm_password', 'Confirmar Senha', 'matches[password]');

            if ($this->form_validation->run()) {

                $data = elements(array('first_name', 'email', 'password', 'username'), $this->input->post());

                if (!$this->ion_auth->is_admin()) {
                    unset($data['active']);
                }

                $data = $this->security->xss_clean($data);
                $password = $this->input->post('password');
                if (!$password) {
                    unset($data['password']);
                }

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

    public function email_check($email)
    {
        $user_id = $this->input->post('user_id');
        if ($this->core_model->get_by_id('users', array('email' => $email, 'id!=' => $user_id))) {
            $this->form_validation->set_message('email_check', 'Esse e-mail já existe');
            return false;
        }
        return true;
    }

    public function username_check($username)
    {
        $user_id = $this->input->post('user_id');
        if ($this->core_model->get_by_id('users', array('username' => $username, 'id!=' => $user_id))) {
            $this->form_validation->set_message('$username_check', 'Esse username já existe');
            return false;
        }
        return true;
    }

    public function del($user_id = null)
    {

        /* if (!$this->ion_auth->is_admin()) {
            redirect('/');
        }*/


        if (!$user_id || !$this->ion_auth->user($user_id)->row()) {
            $this->session->set_flashdata('error', 'Usuário não encontrado');
            redirect('user');
        }
        if ($this->ion_auth->is_admin($user_id)) {
            $this->session->set_flashdata('error', 'O administrador não pode ser excluído');
            redirect('user');
        }
        if ($this->ion_auth->delete_user($user_id)) {
            $this->session->set_flashdata('sucess', 'Usuário excluído com sucesso');
            redirect('user');
        } else {
            $this->session->set_flashdata('sucess', 'Erro ao excluír o usuário');
            redirect('user');
        }
    }
}