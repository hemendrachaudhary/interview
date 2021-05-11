<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function  __construct()
  {
     parent::__construct();
     $this->load->library('form_validation');
     $this->load->library('session');
     $this->load->database();
     $this->load->model('Common_model');
     $this->load->helper('form');
  }

public function login()
	{
		
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}
		else {
			$email    = $this->input->post('email');
			$password = md5($this->input->post('password'));
            $result   = $this->Common_model->getRowResultArray('user_new',array('email' =>$email,'password' =>$password,'role' => 'Admin','deleted'=>0)); 
		    
		if($result)
		{ 
			    $sdata = array(
				'email'       => $result->email,
				'role'        => $result->role,
				'first_name'  => $result->first_name,
				'user_id'     => $result->userId,
			  ); 
			  $this->session->set_userdata($sdata);
             redirect('user-list');
		 }
		else{
			$this->session->set_flashdata('exception', 'Username/Password Incorrect!.');
            $this->load->view('login');
		}

		}
	}

    public function logout() {
    	 $this->session->sess_destroy();
    	redirect('');
    }

}
?>

