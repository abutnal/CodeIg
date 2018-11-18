<?php
class Loginmodel extends CI_Model{

	public function valid_login($username,$password){
		$q = $this->db->where(['email'=>$username,'password'=>$password])->get('tbl_users');
		if($q->num_rows())
		{
			return $q->row()->id;
		}
		else
		{
			return FALSE;
		}

	}

		public function admin_name(){
		$user_id = $this->session->userdata('user_id');
					$query = $this->db
					->select('id')
					->select('fullname')
					->select('email')
					->where('id',$user_id)
					->get('tbl_users');
					return $query->result();
			}
			
		
}