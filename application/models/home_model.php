<?php
	class Home_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();

		}

		public function getAllUsers(){
			$query = $this->db->get('tbl_cucian');
			return $query->result();
		}
		public function getAllUsers_a(){
			$query = $this->db->get('t_sabun');
			return $query->result();
		}
		public function getAllUsers_j(){
			$query = $this->db->get('tbl_jenis');
			return $query->result();
		}
		public function getAllUsers_k(){
			$query = $this->db->get('t_uang');
			return $query->result();
		}
		

		public function insertcucian($user){
			return $this->db->insert('tbl_cucian', $user);
		}
		public function insertsabun($user){
			return $this->db->insert('t_sabun', $user);
		}
		public function insertjasa($user){
			return $this->db->insert('tbl_jenis', $user);
		}

		

		public function getUser_a($id){
			$query = $this->db->get_where('t_sabun', array('id'=>$id));
			return $query->row_array();
		}
		

		
   		

	}
?>