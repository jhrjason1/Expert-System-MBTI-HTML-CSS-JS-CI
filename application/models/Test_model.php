<?php

class Test_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function list_test() {
		$query = $this->db->query(
			"SELECT * FROM soaltest"
		);
		return $query->result_array();
	}

	function weight(){
		for($i = 1 ; $i < 13; $i++) {
			$query = $this->db->query(
				"SELECT CF FROM cirikepribadian WHERE KodeKepribadian = $i"
			);
			$cf = $query->result_array();
			$j = 0;
			foreach($cf as $data) {
				$bobot[$i][$j] = $data['CF'];
				$j++;
			}
		}
		return $bobot;
	}

	public function diagnosa($input) {
		$bobot = $this->weight();

		for($i = 0; $i < 58; $i++) {
			$cf[$i] = 0;
		}

		for($i = 1; $i < 13 ; $i++) {
			$cfCombine = 0;
			for($j = 0; $j < 58; $j++) {
				$cf[$j] = $bobot[$i][$j] * $input[$j];
				if($j == 0) {
					$cfCombine = $cfCombine + $cf[$j];
				} else {
					$cfCombine = $cfCombine + $cf[$j] * (1 - $cfCombine);
				}
			}
			$persentasePerhitungan[$i] = (ceil($cfCombine * 10000) * 100)/10000;
		}
		$type = -1;
		$temp = -1;
		for($i = 1 ; $i < 13 ; $i++) {
			if($persentasePerhitungan[$i] > $temp) {
				$type = $i;
				$temp = $persentasePerhitungan[$i];
			}
		}
		return $type;
	}

	public function personalityType($type) {
		$query = $this->db->query(
			"SELECT * FROM jenispersonalitas WHERE IDPersonality = $type"
		);
		return $query->result_array();
	}
}
