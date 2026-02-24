<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
	 $this->load->library('email'); 
	
      }
    
public function index(){
	
if($this->session->has_userdata('username')) {	
$this->load->view('templates/header');    
$this->load->view('dashboard');
$this->load->view('templates/footer');
	
}
	else{
		redirect('login');
		
	}
        
	
}
}

?>