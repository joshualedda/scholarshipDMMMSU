<?php

class SchoolYear extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
	}

	public function getSchoolYear()
	{
		$sql = "SELECT school_year FROM years";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
}