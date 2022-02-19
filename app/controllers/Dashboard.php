<?php defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseController.php');

class Dashboard extends BaseController {

	public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) redirect('');
		$this->load->model('Ficheiro_model');
		$this->data['class'] = strtolower(__CLASS__);
    }

	public function index()
	{
		$this->data['ficheiros'] = $this->Core_model->get('ficheiros');
		$this->data['utilizadores'] = $this->Core_model->get('users');
		
		$this->data['method'] = __FUNCTION__;
		$this->load->view('layout', $this->data);
	}

	function token() {
		$token = base64_encode(date('Y_m_d_H_i_s'));
		echo '<pre>';
		print_r($token);
		echo '</pre>';
	}

}
