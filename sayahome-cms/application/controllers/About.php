<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('About_model', 'about');
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
 	    $this->load->view('about/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	public function vision()
 	{ 
 	    $this->load->view('templates/header');
 	    $this->load->view('about/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_about(){  
          $fetch_data = $this->about->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->alias;
                $sub_array[] = '<a href="'.base_url().'about/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->about->get_all_data(),  
                "recordsFiltered"  =>$this->about->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['about'] = $this->about->get_about($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));

			if ($this->form_validation->run() == FALSE) {
			    
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('about/edit/', $data);
         	    $this->load->view('templates/footer');
			}
			else {
			    
			    $image_data = '';
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/".$this->input->post('year');  
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
                 	    $this->load->view('about/edit/'.$data);
                 	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        //unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/".$this->input->post('prev_year')."/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            				'description' => $this->input->post('description'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->about->update_award($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'about updated successfully!');
					redirect(base_url('about'));
				}
			}
		}
		else{
		    
            $this->load->view('templates/header');
     	    $this->load->view('about/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
    
    
    function message(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
	        $this->form_validation->set_rules('name', 'Name', 'trim|required');
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));

			if ($this->form_validation->run() == FALSE) {
			    
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				
				$data['message'] = $this->about->get_message($id);
				$this->load->view('templates/header');
         	    $this->load->view('about/message', $data);
         	    $this->load->view('templates/footer');
			}
			else {
			    
			    $image_data = '';
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/";  
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
                 	    $this->load->view('about/message/');
                 	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/about/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'name' => $this->input->post('name'),
            				'designation' => $this->input->post('designation'),
            				'description' => $this->input->post('description'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->about->update_chairman($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', "Chairman's details updated successfully!");
                    $data['message'] = $this->about->get_message($id);
                    $this->load->view('templates/header');
                    $this->load->view('about/message', $data);
                    $this->load->view('templates/footer');
				}
			}
		}
		else{
		    $data['message'] = $this->about->get_message(1);
		    
            $this->load->view('templates/header');
     	    $this->load->view('about/message', $data);
     	    $this->load->view('templates/footer');
		}
    }
    
}
?>