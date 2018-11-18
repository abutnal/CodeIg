<?php

class Login extends MY_Controller{
	
	public function index(){
		if($this->session->userdata('user_id'))
			return redirect('users/dashboard');
		
	  	$this->load->helper('form');
		$this->load->view('login');

	}

    public function daa(){
        echo "Hello";
    }

    public function user_login(){
  			$username = $this->input->post('postname');
    			$password = $this->input->post('postpass');
    			$this->load->model('loginmodel','dologin');
    			$login_id = $this->dologin->valid_login($username, $password);
     			if($login_id){
     				$this->session->set_userdata('user_id',$login_id);
     				echo "23940jjfio32p30943u249932i4032409";

     			}
     			else
     			{
     				echo "invalid";
     			}
    }


      public function do_login(){
     $this->load->view('demo.php');
    echo $username = $this->input->post('postusername');
    			echo $password = $this->input->post('postpassword');

}	

    public function user_logout(){
    	$this->session->unset_userdata('user_id');
    	return redirect('login');
    }

  

    
   } 