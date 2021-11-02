<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) redirect('');
		$this->load->model('Ficheiro_model');
    }

	public function index()
	{
		$data = array('class' => strtolower(__CLASS__), 'method' => __FUNCTION__);
		$this->load->view('layout', $data);
	}

	function token() {
		$token = base64_encode(date('Y_m_d_H_i_s'));
		echo '<pre>';
		print_r($token);
		echo '</pre>';
	}

}
