<?php

class Credits extends CI_Controller {
	public function index() {
		$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
		$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
		$data['navbar'] = $this->load->view('navbar/topnav.php', $data, TRUE);
		$this->load->view('pages/CreditsPage.php',$data);
	}
}
