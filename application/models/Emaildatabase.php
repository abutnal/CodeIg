
<?php
class Emaildatabase extends CI_Model{

		public function email_data(){
			$user_id = $this->session->userdata('user_id');
					$query = $this->db
					->select('*')
					->where('user_id',$user_id)
					->order_by("email_id", "desc")
					->get('user_data');
					 return $query->result();
			}

		public function email_update($emailid,$user_id,$data){
			   $query = $this->db
			   ->where('email_id',$emailid)
			   ->where('user_id',$user_id)
			   ->update('user_data',$data);
			   // return $query->result();
		}

		public function email_add($user_id,$data){
			 $query = $this->db
			->insert('user_data',$data);
		}	

		public function email_delete($emailid,$user_id){
			$query = $this->db
			->where_in('email_id',$emailid)
			->where('user_id',$user_id)
			->delete('user_data');
		}

		public function bulk_email_add($user_id,$data){
			 return  $this->db->insert('user_data',$data);
		}	


		

		public function bulkmailsending($IdArray1,$user_id,$data){
			   $query = $this->db
			   ->where('email_id',$IdArray1)
			   ->where('user_id',$user_id)
			   ->update('user_data',$data);
			    return $query;
		}

}