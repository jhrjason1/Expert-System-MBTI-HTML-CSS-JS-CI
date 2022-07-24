<?php

class Tipe_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function list_tipe() {
		$query = $this->db->query(
			"SELECT * FROM jenispersonalitas"
		);
		return $query->result_array();
	}

	public function filter_tipe($type) {
		$query = $this->db->query(
			"SELECT * FROM jenispersonalitas WHERE Personality LIKE '%$type%'"
		);
		return $query->result_array();
	}
}
