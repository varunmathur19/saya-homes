<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awards extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Awards_model', 'awards');
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
 	    $this->load->view('awards/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_awards(){  
          $fetch_data = $this->awards->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;
                $sub_array[] = '<a href="'.base_url().'awards/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="awards"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->awards->get_all_data(),  
                "recordsFiltered"  =>$this->awards->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));
            
            if (empty($_FILES['file']['name']))
            {
                $this->form_validation->set_rules('file', 'Image', 'required' , array('required'=> 'The Media field is required.'));
            }

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('awards/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/awards/" ; 
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
                    $data['errors'] =  $this->upload->display_errors();
                    
                    $this->session->set_flashdata('errors', $data['errors']);
    				$this->load->view('templates/header');
             	    $this->load->view('awards/add');
             	    $this->load->view('templates/footer');
                }
                else
                {
                    $idata = $this->upload->data();
                
                    $data = array(
        		 		'title' => $this->input->post('title'),
        				'description' => $this->input->post('description'),
        				'media' => $idata['file_name']
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->awards->add_award($data);
    				if($result){
    					$this->session->set_flashdata('success', 'Awards added successfully!');
    					redirect(base_url('awards'));
    				}
                }
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('awards/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['awards'] = $this->awards->get_awards($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));

			if ($this->form_validation->run() == FALSE) {
			    
			    $data['errors'] = validation_errors();

				$this->session->set_flashdata('errors', $data['errors']);
                
				$this->load->view('templates/header');
         	    $this->load->view('awards/edit',$data);
          	    $this->load->view('templates/footer');
			}
			else {
			    
			    $image_data = '';
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/awards/";  
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
                        $data['errors'] =  $this->upload->display_errors();
                        
                        $this->session->set_flashdata('errors', $data['errors']);
        				$this->load->view('templates/header');
                 	    $this->load->view('awards/edit',$data);
                  	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/awards/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'description' => $this->input->post('description'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->awards->update_award($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Awards updated successfully!');
					redirect(base_url('awards'));
				}
			}
		}
		else{
		    
            $this->load->view('templates/header');
     	    $this->load->view('awards/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>