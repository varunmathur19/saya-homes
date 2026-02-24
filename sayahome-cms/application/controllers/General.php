<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('News_model', 'news');
        $this->load->model('General_model', 'general');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    
    public function remove()
 	{ 
 	    $this->general->delete($this->input->post('id'), $this->input->post('type'));
 	}
}
?>