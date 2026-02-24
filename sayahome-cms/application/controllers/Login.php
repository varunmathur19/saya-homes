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
             
                $usr_result = $this->Login_model->login($username, $password);

                if ($usr_result > 0) 
                {
                     
                     $_SESSION['username'] = $username;
                     $_SESSION['loginuser'] = true;

                    redirect("dashboard");
                }
                else
                {
                     $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid Username and password!</div>');
                     redirect('login');
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
	  $this->session->sess_destroy();
	 redirect('login');
 }

}

?>