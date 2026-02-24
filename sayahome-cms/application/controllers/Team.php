<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Team_model', 'team');
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
 	    $this->load->view('team/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_team(){  
          $fetch_data = $this->team->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->name;
                $sub_array[] = $row->designation;
                $sub_array[] = '<a href="'.base_url().'team/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="team"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->team->get_all_data(),  
                "recordsFiltered"  =>$this->team->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));
            $this->form_validation->set_rules('designation', 'Designation', 'trim|required', array('required'=> 'The Designation field is required.'));
            
            if (empty($_FILES['file']['name']))
            {
                $this->form_validation->set_rules('file', 'Image', 'required' , array('required'=> 'The media field is required.'));
            }

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('team/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/team"; 
                if(!file_exists($path)) 
                {
                           mkdir($path, 0777, true);
                }
                $config = array(
                    'upload_path' => $path,
                    'allowed_types' => "jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'max_size' => "2048000", 
                    'max_height' => "600",
                    'max_width' => "800",
                    'file_name' => date('Ymdhis').'-'.$_FILES["file"]['name'],
                );
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('file'))
                { 
                    $data['error'] =  $this->upload->display_errors();
                }
                else
                {
                    $idata = $this->upload->data();
                
                    $data = array(
        				    'name' => $this->input->post('title'),
            		 		'designation' => $this->input->post('designation'),
            				'description' => $this->input->post('description'),
            				'media' => $idata['file_name'],
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->team->add_team($data);
    				if($result){
    					$this->session->set_flashdata('success', 'Team added successfully!');
    					redirect(base_url('team'));
    				}
                }
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('team/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['team'] = $this->team->get_team($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));
            $this->form_validation->set_rules('designation', 'Date', 'trim|required', array('required'=> 'The Designation field is required.'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('team/edit',$data);
          	    $this->load->view('templates/footer');
			}
			else {
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/team"; 
                    if(!file_exists($path)) 
                    {
                               mkdir($path, 0777, true);
                    }
                    $config = array(
                        'upload_path' => $path,
                        'allowed_types' => "jpg|png|jpeg",
                        'overwrite' => TRUE,
                        'max_size' => "2048000", 
                        'max_height' => "600",
                        'max_width' => "800",
                        'file_name' => date('Ymdhis').'-'.$_FILES["file"]['name'],
                    );
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('file'))
                    { 
                        $data['error'] =  $this->upload->display_errors();
                        
                        $this->session->set_flashdata('errors', $data['errors']);
        				$this->load->view('templates/header');
                 	    $this->load->view('team/edit',$data);
                  	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        //unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/team/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'name' => $this->input->post('title'),
            		 		'designation' => $this->input->post('designation'),
            				'description' => $this->input->post('description'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->team->update_team($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Team updated successfully!');
					redirect(base_url('team'));
				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('team/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>