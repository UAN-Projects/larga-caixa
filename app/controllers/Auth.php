<?php defined('BASEPATH') OR exit('Acção não permitida');

class Auth extends CI_Controller {

    public function index() {
        if($this->ion_auth->logged_in()) redirect('dashboard');

        $data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__);
        $this->session->set_flashdata('error', 'Verifica o seu email ou senha!');
        $this->load->view('auth', $data);
    }

    public function autenticacao() {
        $identity = $this->security->xss_clean($this->input->post('identity'));
        $password = $this->security->xss_clean($this->input->post('password'));
        $remember = FALSE;
        
        if ($this->ion_auth->login($identity, $password, $remember)) {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Verifica o seu email ou senha!');
            redirect('login');
        }
    }

    public function logout() {
        $this->ion_auth->logout();
		redirect('');
    }

    public function register()
    {
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

            $additional_data = $this->security->xss_clean($additional_data);

            $group = 2;

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
    }

}
