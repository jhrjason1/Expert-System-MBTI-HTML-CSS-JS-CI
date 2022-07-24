<?php

class Test extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('test_model');
	}

	public function index() {
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$data['navbar'] = $this->load->view('navbar/topnav.php', $data, TRUE);
		$data['test'] = $this->test_model->list_test();
		$this->load->view('pages/TestPage.php', $data);
	}


}
