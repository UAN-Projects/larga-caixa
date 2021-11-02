<?php defined('BASEPATH') or exit('Acção não permitida');

class User extends CI_Controller
{
    protected $data = [];

    public function __construct() {
        parent::__construct();
        if(!$this->ion_auth->logged_in()) redirect();
        // if(!$this->ion_auth->is_admin()) redirect();
        $this->data['class'] = strtolower(__CLASS__);
    }

    public function index()
    {
        $this->data['method'] = __FUNCTION__;

        $this->form_validation->set_rules('username', 'UserName', 'required');
        $this->form_validation->set_rules('first_name', 'Nome', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Senha', 'required|min_length[5]|max_length[255]');
        $this->form_validation->set_rules('confirm_password', 'Confirmar Senha', 'matches[password]');

        if ($this->form_validation->run()) {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $username = $this->security->xss_clean($this->input->post('username'));

            $additional_data = array(
                'first_name' => $this->input->post('first_name'),
                'username' => $this->input->post('username'),
                'phone' => $this->input->post('phone'),
            );

            $additional_data = $this->security->xss_clean($additional_data);
            $group = array(1);

            if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }
        $this->data['items'] = $this->ion_auth->users()->result();
        $this->load->view('layout', $this->data);
    }

	public function show($id=NULL) {
        $this->data['method'] = __FUNCTION__;
        $this->data['item'] = $this->ion_auth->user($id)->row();
		$this->load->view('layout', $this->data);
	}


    public function update($id = NULL)
    {
        if($this->ion_auth->user()->row()->id != $id) {
            $this->session->set_tempdata('notify', __CLASS__.",error, Não tem permissão para executar essa operação!", 1);
            redirect();
        }

        $this->form_validation->set_rules('first_name', 'Nome', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('phone', 'Telefone', 'required');
        $this->form_validation->set_rules('password', 'Senha', 'min_length[5]|max_length[255]');
        $this->form_validation->set_rules('confirm_password', 'Confirmar Senha', 'matches[password]');

        if ($this->form_validation->run()) {

            $update_data = elements(array('first_name', 'email', 'phone', 'password', 'username'), $this->security->xss_clean($this->input->post()));

            $password = $update_data('password');
            if(!$password) unset($update_data['password']);

            if($this->ion_auth->update($id, $update_data)) {
                $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
            } else {
                $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
            }
        }
        $this->data['items'] = $this->ion_auth->users()->result();
        $this->load->view('layout', $this->data);
    }

    public function generateToken()
    {
        $user_id = $this->ion_auth->user()->row()->id;
        if($this->ion_auth->update($user_id, array('token' => base64_encode(date('Y_m_d_H_i_s'))))) {
            $this->session->set_tempdata('notify', __CLASS__.",success, Sucesso!", 1);
        } else {
            $this->session->set_tempdata('notify', __CLASS__.",error, Erro!", 1);
        }
        $this->show($user_id);
    }


    public function delete($user_id)
    {
        ($this->ion_auth->delete_user($id))
        ? $this->session->set_flashdata('sucesso', 'Sucesso!') 
        : $this->session->set_flashdata('error', 'Erro na operação!');
        redirect('user');
    }
}