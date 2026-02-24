<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Gallery_model', 'gallery');
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
 	    $this->load->view('gallery/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_gallery(){  

          $id = $this->input->post('id');
          $fetch_data = $this->gallery->make_datatables($id);  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = '<img src="../../../assets/events/'. $id.'/'.$row->media.'" width="20%">';
                $sub_array[] = '<a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="events_gallery"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->gallery->get_all_data($id),  
                "recordsFiltered"  =>$this->gallery->get_filtered_data($id), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
            
            if (empty($_FILES['file']['name']))
            {
                $this->form_validation->set_rules('file', 'Image', 'required' , array('required'=> 'The Image is required.'));
            }

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('gallery/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/events/".$id; 
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
        				    'event_id' => $id,
            				'media' => $idata['file_name'],
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->gallery->add_gallery($data);
    				if($result){
    					$this->session->set_flashdata('success', 'Gallery added successfully!');
    					redirect(base_url('gallery/add/'.$id));
    				}
                }
			}
		}
		else{
		    
		    $data['id'] = $id;
            $this->load->view('templates/header');
     	    $this->load->view('gallery/add', $data);
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['event'] = $this->event->get_event($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			
			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('event/edit',$data);
          	    $this->load->view('templates/footer');
			}
			else {
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/events/".$id; 
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
                        
                        //unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/events/".$id.'/'.$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'name' => $this->input->post('title'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->event->update_event($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Event updated successfully!');
					redirect(base_url('event'));
				}
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('event/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>