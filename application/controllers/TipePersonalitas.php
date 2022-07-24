<?php

class TipePersonalitas extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('tipe_model');
	}

	public function index() {
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$data['navbar'] = $this->load->view('navbar/topnav.php', $data, TRUE);
		if($this->input->POST('keyword')) {
			$data['tipe'] = $this->tipe_model->filter_tipe($this->input->POST('keyword'));
		} else {
			$data['tipe'] = $this->tipe_model->list_tipe();
		}
		$this->load->view('pages/PersonalityTypesPage.php',$data);
	}
}
