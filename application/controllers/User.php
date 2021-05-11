<?php
class User extends CI_Controller
{
  public function  __construct()
  {
     parent::__construct();
     $this->load->library('form_validation');
     $this->load->library('session');
     $this->load->database();
     $this->load->model('Common_model');
     
     }
    
    public function checkLogin() {
      if($this->session->userdata('role')=="") {
        redirect('');
      }
     }

	public function create_user() {
		$this->load->view('common/header');
		$this->load->view('common/sidebar');
		$this->form_validation->set_rules('first_name','Name','required');
	  $this->form_validation->set_rules('email','Email','required|is_unique[user_new.email]');
	  $this->form_validation->set_rules('phone','Phone','required');
	  $this->form_validation->set_rules('password','Password','required');
	  if($this->form_validation->run()==false){
	    $this->load->view('pages/user/create_user');
		} else {
          
        $config['upload_path']          = './assest/images/user';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 450;
        // $config['max_width']            = 2024;
        // $config['max_height']           = 1568;
        $this->load->library('upload', $config);
        $config['file_name'] = $this->upload->data('file_name');
        
        $this->upload->do_upload('userImg');
        $userImg= $this->upload->data('file_name');
	    $data = array(
	            'first_name' => $this->input->post('first_name'),
              'middle_name' => $this->input->post('middle_name'),
              'last_name'  => $this->input->post('last_name'),
              'email'      => $this->input->post('email'),
              'phone'      => $this->input->post('phone'),
              'password'   => md5($this->input->post('password')),
              'role'       => 'User',
              'profile_image_path' => $userImg,
             );
    $insert_id = $this->Common_model->insertAll('user_new',$data);
    $this->session->set_flashdata('exception', 'User created successfull.');
    $this->load->view('pages/user/create_user');
        }
  
		$this->load->view('common/footer');

	}

	public function userlist() {
    $this->checkLogin();
    $this->load->view('common/header');
		$this->load->view('common/sidebar');
		$data['user'] = $this->Common_model->getAllResultWhereOrderBy('user_new',array('role'=>"User"),'userId');
    $this->load->view('pages/user/userlist',$data);  
		$this->load->view('common/footer');
	}



 
	



  public function changeUserStatus() 
  {
    $this->checkLogin();
    $id = base64_decode($this->input->get('user_id'));
    $user = $this->Common_model->getRowResultArray('user_new',array('userId'=>$id));
    if($user->deleted==0) {
    $userInfo = $this->Common_model->updateAllResultWhere('user_new',array('userId' =>$id),array('deleted'=>1));
    } else {
    $userInfo = $this->Common_model->updateAllResultWhere('user_new',array('userId' =>$id),array('deleted'=>0));
    } 
    redirect('user-list');
  }

  public function edit_user() {
    $this->checkLogin();
    $this->load->view('common/header');
    $this->load->view('common/sidebar');

     $this->form_validation->set_rules('first_name','Name','required');
     $this->form_validation->set_rules('phone','Mobile no.','required');
     if($this->form_validation->run()==false){
        
        $user_id = base64_decode($this->input->get('user_id'));
        if($user_id) {
        $data['user_info'] = $this->Common_model->getRowResultArray('user_new',array('userId'=>$user_id));
        } else{
          $data['user_info'] = $this->Common_model->getRowResultArray('user_new',array('userId'=>$this->input->post('userId')));
        }
        
       $this->load->view('pages/user/edit_user',$data);
    } else {
        $data['user_info'] = $this->Common_model->getRowResultArray('user_new',array('deleted'=>0,'userId'=>$this->input->post('userId')));
         $userImg =  $data['user_info']->profile_image_path;
         if($_FILES['userImg']['name']!=""){
        $config['upload_path']          = './assest/images/user';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        
        $this->load->library('upload', $config);
        $config['file_name'] = $this->upload->data('file_name');
        
        $this->upload->do_upload('userImg');
        $userImg= $this->upload->data('file_name');
        }
       $updateData = array(
              'first_name' => $this->input->post('first_name'),
              'middle_name' => $this->input->post('middle_name'),
              'last_name'          => $this->input->post('last_name'),
              'phone'              => $this->input->post('phone'),
              'role'               => 'User',
              'profile_image_path' => $userImg,
              );
    $insert_id = $this->Common_model->updateAllResultWhere('user_new',array('userId'=>$this->input->post('userId')),$updateData);
   
    redirect('user-list');
        }
  
    $this->load->view('common/footer');
  }

  public function userInfo() 
  {
     $this->checkLogin();
     $id = base64_decode($this->input->get('user_id'));
     $this->load->view('common/header');
     $this->load->view('common/sidebar');
     $data['user_info'] = $this->Common_model->getRowResultArray('user_new',array('userId' =>$id));
     $user_id = base64_decode($this->input->get('user_id'));
     $this->load->view('pages/user/userinfo',$data); 
     $this->load->view('common/footer');
  } 

}


