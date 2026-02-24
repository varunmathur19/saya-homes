<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
     $this->load->model('Login_model');
	 $this->load->library('form_validation');
	 $this->load->helper(array('form', 'url'));
		
		
			
      }
    
public function index()
 	{  
 	    
 	  if($this->session->has_userdata('username')){
    		redirect("popup_enquiry");
      }
    	
      $this->form_validation->set_rules("username", "Username", "trim|required");
      $this->form_validation->set_rules("password", "Password", "trim|required");
           if ($this->input->post())
           {
			   
              
           if ($this->form_validation->run() == false)
              { 
              
                redirect('login');
           }
           else
           {
            $username= $this->input->post("username");
            $password = md5($this->input->post("password"));
			   
                 
                if ($this->Login_model->login($username, $password))
					
				{    
					$session_data = array(  
					'username'     =>     $username  
				);
                     $this->session->set_userdata($session_data);
						 redirect("dashboard");    
					  
                }
                else
                {
                     $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid Username and password!</div>');
                     redirect('login');
					$this->session->flashdata('msg');
                }
               
           }
      }
      else
      {
           $this->load->view('login');
           
      }
 	        
 	    }
 	    
 	    
 
 
 public function logout()
 {
	 
    $this->session->unset_userdata('username');
	 $this->session->userdata = array();
	 $this->session->sess_destroy();
	redirect('login');
	 
 }

}

?>