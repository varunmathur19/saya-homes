<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coverage extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Coverage_model', 'coverage');
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
 	    $this->load->view('coverage/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_coverage(){  
          $fetch_data = $this->coverage->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;
                $sub_array[] = $row->description;
                $sub_array[] = '<img width="100px" src="../images/media/'.$row->publisher.'"/>';;
                $sub_array[] = $row->pub_date;
                $sub_array[] = '<a href="'.base_url().'coverage/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="press_release"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->coverage->get_all_data(),  
                "recordsFiltered"  =>$this->coverage->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Link field is required.'));
            $this->form_validation->set_rules('date', 'Date', 'trim|required', array('required'=> 'The Date field is required.'));
            
            if (empty($_FILES['file']['name']))
            {
                $this->form_validation->set_rules('file', 'Image', 'required' , array('required'=> 'The Publisher field is required.'));
            }

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('coverage/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/images/media" ; 
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
        		 		'title' => $this->input->post('title'),
        				'description' => $this->input->post('description'),
        				'pub_date' => $this->input->post('date'),
        				'date' => $this->input->post('date'),
        				'publisher' => $idata['file_name']
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->coverage->add_coverage($data);
    				if($result){
    					$this->session->set_flashdata('success', 'coverage added successfully!');
    					redirect(base_url('coverage'));
    				}
                }
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('coverage/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Link field is required.'));
            $this->form_validation->set_rules('date', 'Date', 'trim|required', array('required'=> 'The Date field is required.'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('coverage/edit/'.$id);
         	    $this->load->view('templates/footer');
			}
			else {
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/images/media" ; 
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
                        $image_data = $idata['file_name'];
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'description' => $this->input->post('description'),
            				'pub_date' => $this->input->post('date'),
            				'publisher' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->coverage->update_coverage($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'coverage updated successfully!');
					redirect(base_url('coverage'));
				}
			}
		}
		else{
		    $data['coverage'] = $this->coverage->get_coverage($id);
		    
            $this->load->view('templates/header');
     	    $this->load->view('coverage/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>