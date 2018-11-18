<?php
class Users extends MY_Controller{

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id'))
		return redirect('login');
		$this->load->model('emaildatabase','emaildata');
	}

	//Dashbord
	public function dashboard(){
		$this->load->model('loginmodel','admin');
		$admin = $this->admin->admin_name();
			$emaildata = $this->emaildata->email_data();
		$this->load->view('users/dashboard',['admin'=>$admin,'emaildata'=>$emaildata]);
	}

    //Display email database
   public function data(){
   $data = array();  
   foreach($emaildata = $this->emaildata->email_data() as $edata){
   	 		 	$sub_array=array();
				$sub_array['id']=$edata->email_id;
				$sub_array['email']=$edata->email;
				$sub_array['status']=$edata->status;
				$sub_array['date']=$edata->date;
				$data[] = $sub_array;
   	 }
		  		$results = array("rows"=>$data);
				print json_encode($results);
   }


	
	//Send bulk emails

		public function bulksendmail(){
		    include('class.phpmailer.php');
			$user_id = $this->session->userdata('user_id');
		  //  $emailid = $this->input->post('post_txt_Emailids');
		    $timezone = new DateTimeZone("Asia/Kolkata" );
			$date = new DateTime();
			$date->setTimezone($timezone );
			$sent_date=$date->format('M d Y g:i:s a');
			$EmailArray = explode(',', str_replace(" ","", $this->input->post('post_Address')));
		    $IdArray = explode(',', str_replace(" ","", $this->input->post('post_txt_Emailids')));
		    foreach(array_combine($EmailArray, $IdArray) as $EmailArray1 => $IdArray1)
			{
				//print_r($EmailArray1);
				//print_r($IdArray1);

					$mail=new PHPMailer();

					$mail->IsSMTP();
					$mail->SMTPDebug = 1;
					$mail->SMTPAuth=true;
					$mail->SMTPSecure= "ssl";
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465;
					$mail-> IsHTML(true);
					$mail->Username = "utnal.ab@gmail.com";
					$mail->Password = "Iforgotten";
					$mail->SetForm=("utnal.ab@gmail.com");
					$mail->Subject=$this->input->post('post_Sub');
					$mail->Body=$this->input->post('post_Body');
					$mail->AddAddress($EmailArray1);
					//$mail->AddAttachment( $_FILES["post_File"]);
					/*foreach ($_FILES["post_File"]["name"] as $k => $v) {
					$mail->AddAttachment( $_FILES["post_File"]["tmp_name"][$k], $_FILES["post_File"]["name"][$k] );
					}*/
					if(!$mail->Send())
					{
					echo "Mailer Error:".$mail->ErrorInfo;
					}
					else
					{
					 echo "Message has been sent";
					}


				$data = ['status'=>'Sent','sent_date'=>$sent_date];
		   		$sent = $this->emaildata->bulkmailsending($IdArray1,$user_id,$data);
			}
	 	    if($sent){
	 	   //	echo "success";
		  	}
	}

	//Update data
		public function update(){
			$user_id = $this->session->userdata('user_id');
		    $emailid = $this->input->post('id');
		    $data = ['email'=>$this->input->post('email'),'status'=>$this->input->post('status')];
		    $email_update = $this->emaildata->email_update($emailid,$user_id,$data);
	 	    if($email_update){
	 	   	echo "success";
		  	}
	}

	//Add data
		public function add(){
			$user_id = $this->session->userdata('user_id');
			$timezone = new DateTimeZone("Asia/Kolkata" );
			$date = new DateTime();
			$date->setTimezone($timezone );
			$submitdate=$date->format('M d Y g:i:s a');
			$data = ['user_id'=>$user_id, 'email'=>$this->input->post('email'),'status'=>$this->input->post('status'),'date'=>$submitdate];
			$email_add = $this->emaildata->email_add($user_id,$data);
			if($email_add){
				echo "success";
			}
	}

	//Delete data
		public function delete(){
			 $emailid = $this->input->post('postids');
			// print_r($emailid);
			$user_id = $this->session->userdata('user_id');
			$email_delete = $this->emaildata->email_delete($emailid,$user_id);
			if($email_delete){
				echo "Success";
			}
		}


	//Bulk Email Intert
		public function bulk_email_intert(){
			$user_id = $this->session->userdata('user_id');
			$timezone = new DateTimeZone("Asia/Kolkata" );
			$date = new DateTime();
			$date->setTimezone($timezone );
			$submitdate=$date->format('M d Y g:i:s a');
		 	$myArray = explode(',', str_replace(" ","", $this->input->post('post_txt_Edata')));
			foreach($myArray as $bemail)
			{
				//print_r($bemail);
				$data = ['user_id'=>$user_id,'email'=>$bemail,'date'=>$submitdate];
				 $bulk = $this->emaildata->bulk_email_add($user_id,$data);
			}
			
		  
			if($bulk){
				echo "success";
			}

		}	


}