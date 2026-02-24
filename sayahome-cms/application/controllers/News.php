<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('News_model', 'news');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        if(!_is_logged_in())  
        {
            redirect("login");
        }
    }
    
    public function index()
 	{ 
 	    $this->load->view('templates/header');
 	    $this->load->view('news/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_news(){  
          $fetch_data = $this->news->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;  
                $sub_array[] = $row->description;
                $sub_array[] = $row->posted_on;
                $sub_array[] = '<a href="'.base_url().'news/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="news"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->news->get_all_data(),  
                "recordsFiltered"  =>$this->news->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('date', 'Date', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('news/add');
         	    $this->load->view('templates/footer');
			}
			else{
				$data = array(
		 		'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'posted_on' => $this->input->post('date')
				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->news->add_news($data);
				if($result){
					$this->session->set_flashdata('success', 'News added successfully!');
					redirect(base_url('news'));
				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('news/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('date', 'Date', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('news/edit/'.$id);
         	    $this->load->view('templates/footer');
			}
			else {
			    
				$data = array(
    		 		'title' => $this->input->post('title'),
    				'description' => $this->input->post('description'),
    				'posted_on' => $this->input->post('date')
				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->news->update_news($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'News updated successfully!');
					redirect(base_url('news'));
				}
			}
		}
		else{
		    $data['news'] = $this->news->get_news($id);
		    
            $this->load->view('templates/header');
     	    $this->load->view('news/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>