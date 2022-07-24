<?php

class Result extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('test_model');
	}

	public function index() {
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$data['navbar'] = $this->load->view('navbar/topnav.php', $data, TRUE);
		for($i = 0 ; $i < 58; $i++){
			$input[$i]= $this->input->POST($i+1);
		}
		$result = $this->test_model->diagnosa($input);
		$data['type'] = $this->test_model->personalityType($result);
		$this->load->view('pages/ResultPage.php', $data);
	}
}
