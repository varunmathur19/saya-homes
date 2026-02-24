<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Project_model', 'project');
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
 	    $this->load->view('project/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_project(){  
          $fetch_data = $this->project->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->project;
                $sub_array[] = $row->location;
                $sub_array[] = $row->status;
                $sub_array[] = '<a href="'.base_url().'project/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->project->get_all_data(),  
                "recordsFiltered"  =>$this->project->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['project'] = $this->project->get_project($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('type', 'Type', 'trim|required');
 			$this->form_validation->set_rules('location', 'Location', 'trim|required');
 			$this->form_validation->set_rules('typology', 'Typology', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$data['project'] = $this->project->get_project($id);
				$this->load->view('templates/header');
         	    $this->load->view('project/edit',$data);
          	    $this->load->view('templates/footer');
			}
			else {
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/project"; 
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
                 	    $this->load->view('project/edit',$data);
                  	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        //unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/project/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'project' => $this->input->post('title'),
            		 		'type' => $this->input->post('type'),
            		 		'location' => $this->input->post('location'),
            				'typology' => $this->input->post('typology'),
            				'description' => $this->input->post('description'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->project->update_project($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Project updated successfully!');
					redirect(base_url('project'));
				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('project/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>