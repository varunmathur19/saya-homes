<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
	    $this->load->library('email');
	    if(!_is_logged_in())  
        {
            redirect("login");
        }
    }
    
public function index(){
$this->load->view('templates/header');    
$this->load->view('dashboard');
$this->load->view('templates/footer');
}
}

?>