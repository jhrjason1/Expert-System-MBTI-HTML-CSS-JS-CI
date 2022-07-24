<?php
    defined('BASEPATH');

    class Home extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('home_model');
        }

		public function index() {
			$data['style'] = $this->load->view('include/style.php', NULL, TRUE);
			$data['script'] = $this->load->view('include/script.php', NULL, TRUE);
			$data['navbar'] = $this->load->view('navbar/topnav.php', $data, TRUE);
			$this->load->view('pages/HomePage.php',$data);
		}

    }
?>
