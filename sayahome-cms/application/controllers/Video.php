<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Video_model', 'video');
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
 	    $this->load->view('video/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_video(){  

          $fetch_data = $this->video->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title; 
                $sub_array[] = $row->link;  
                $sub_array[] = '<a href="'.base_url().'video/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="electronic_media"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->video->get_all_data(),  
                "recordsFiltered"  =>$this->video->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){

            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('year', 'Year', 'trim|required');
 			$this->form_validation->set_rules('link', 'Video Link', 'trim|required|callback_validate_youtubelink');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('video/add');
         	    $this->load->view('templates/footer');
			}
			else{
				$data = array(
				    'title' => $this->input->post('title'),
				    'description' => $this->input->post('description'),
				    'year' => $this->input->post('year'),
				    'link' => $this->input->post('link'),
				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->video->add_video($data);
				if($result){
					$this->session->set_flashdata('success', 'video added successfully!');
					redirect(base_url('video'));
				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('video/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            $this->form_validation->set_rules('year', 'Year', 'trim|required');
 			$this->form_validation->set_rules('link', 'Video Link', 'trim|required|callback_validate_youtubelink');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('video/edit/'.$id);
         	    $this->load->view('templates/footer');
			}
			else {
			    
				$data = array(
    				'title' => $this->input->post('title'),
				    'description' => $this->input->post('description'),
				    'year' => $this->input->post('year'),
				    'link' => $this->input->post('link'),
				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->video->update_video($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Video updated successfully!');
					redirect(base_url('video'));
				}
			}
		}
		else{
		    $data['video'] = $this->video->get_video($id);
		    
            $this->load->view('templates/header');
     	    $this->load->view('video/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
    
    function validate_youtubelink($str)
    {
        $this->form_validation->set_message('validate_youtubelink', 'The Video must contain valid link');
        
        if (preg_match('/^(https|http):\/\/(?:www\.)?youtube.com\/embed\/[A-z0-9]+/', $str ) ) 
        {
            return TRUE;
        } 
        else 
        {
            return FALSE;
        }
    }

}
?>