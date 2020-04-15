<?php

class Login_model extends CI_Model
{
	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function login($name)
	{
		return $this->db->get_where('user', ['username' => $name])->result_array();
	}


	public function simpan($table, $data)
	{

		$query = $this->db->insert($table, $data);

		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	public function get_all()
	{
		$query = $this->db->select("*")
			->from('pemasukan')
			->order_by('tanggal', 'DESC')
			->get();
		return $query->result();
	}

<<<<<<< Updated upstream
	public function get_jumlah()
=======
	public function get_profit()
	{
		$query = $this->db->select("*")
			->from('profit')
			->get();
		return $query->result();
	}

	public function get_jumlah($tabel)
>>>>>>> Stashed changes
	{
		$this->db->select_sum('jumlah');
		$result = $this->db->get('pemasukan')->row();  
		return $result->jumlah;

		// $query = $this->db->select_sum("jumlah")
		// 	->from('pemasukan')
		// 	// ->order_by('tanggal', 'DESC')
		// 	->get();
		// return $query->result();
	}
}
