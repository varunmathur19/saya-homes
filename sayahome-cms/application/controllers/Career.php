<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Career_model', 'career');
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
 	    $this->load->view('career/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_career(){  
          $fetch_data = $this->career->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;
                //$sub_array[] = $row->description;
                $sub_array[] = '<a href="'.base_url().'career/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="career_openings"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->career->get_all_data(),  
                "recordsFiltered"  =>$this->career->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('experience', 'Experience', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));
 			
 			$content = $this->input->post('description');
 			
 			$string = htmlentities($content, null, 'utf-8');
            $content = str_replace("&nbsp;", "", $string);
            $content = html_entity_decode($content);
 			
 			// print_r(strip_tags(str_replace("&nbsp;", "", $content))); die();
            
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('career/add');
         	    $this->load->view('templates/footer');
			}
			else{
                
                    $data = array(
        		 		'title' => $this->input->post('title'),
        				'description' => $this->input->post('description'),
        				'experience' => $this->input->post('experience')
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->career->add_career($data);
    				if($result){
    					$this->session->set_flashdata('success', 'Career Opportunity added successfully!');
    					redirect(base_url('career'));
    				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('career/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('experience', 'Experience', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('career/edit/'.$id);
         	    $this->load->view('templates/footer');
			}
			else {
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'description' => $this->input->post('description'),
            				'experience' => $this->input->post('experience')
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->career->update_career($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Career updated successfully!');
					redirect(base_url('career'));
				}
			}
		}
		else{
		    $data['career'] = $this->career->get_career($id);
		    
            $this->load->view('templates/header');
     	    $this->load->view('career/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>