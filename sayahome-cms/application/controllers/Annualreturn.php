<?php
defined('BASEPATH') OR exit('No direct script access allowed');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Annualreturn extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('AnnualReturn_model', 'annualreturn');
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
 	    $this->load->view('annualreturn/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_annualreturn(){  
          $fetch_data = $this->annualreturn->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;
                $sub_array[] = $row->year;
                $sub_array[] = '<a href="'.base_url().'annualreturn/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="annual_return"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->annualreturn->get_all_data(),  
                "recordsFiltered"  =>$this->annualreturn->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('year', 'Year', 'trim|required', array('required'=> 'The Year field is required.'));
            
            if (empty($_FILES['file']['name']))
            {
                $this->form_validation->set_rules('file', 'Pdf', 'required' , array('required'=> 'The Media field is required.'));
            }

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('annualreturn/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/annualreturn/".$this->input->post('year') ; 
                if(!file_exists($path)) 
                {
                          mkdir($path, 0777, true);
                }
                $config = array(
                    'upload_path' => $path,
                    'allowed_types' => "pdf",
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
             	    $this->load->view('annualreturn/add');
             	    $this->load->view('templates/footer');
                }
                else
                {
                    $idata = $this->upload->data();
                
                    $data = array(
        		 		'title' => $this->input->post('title'),
        				'year' => $this->input->post('year'),
        				'media' => $idata['file_name']
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->annualreturn->add_annualreturn($data);
    				if($result){
    					$this->session->set_flashdata('success', 'Annual return added successfully!');
    					redirect(base_url('annualreturn'));
    				}
                }
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('annualreturn/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('year', 'Year', 'trim|required', array('required'=> 'The Year field is required.'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				$this->load->view('templates/header');
         	    $this->load->view('annualreturn/edit/'.$id);
         	    $this->load->view('templates/footer');
			}
			else {
			    
			    $image_data = '';
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/annualreturn/".$this->input->post('year');  
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
                 	    $this->load->view('annualreturn/edit/'.$id);
                 	    $this->load->view('templates/footer');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/annualreturn/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'year' => $this->input->post('year'),
            				'media' => $image_data,
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->annualreturn->update_annualreturn($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'Annual return updated successfully!');
					redirect(base_url('annualreturn'));
				}
			}
		}
		else{
		    $data['annualreturn'] = $this->annualreturn->get_annualreturn($id);
		    
            $this->load->view('templates/header');
     	    $this->load->view('annualreturn/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>