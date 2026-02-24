<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csr extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Csr_model', 'csr');
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
 	    $this->load->view('csr/list');
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_csr(){  
          $fetch_data = $this->csr->make_datatables();  
           
          $data = array();  
          foreach($fetch_data as $row)  
          {  
                $sub_array = array();  
               
                $sub_array[] = $row->title;
                $sub_array[] = $row->description;
                $sub_array[] = '<img src="'.$this->config->item("assets_url")."assets/csr/".$row->img.'" width="150px">';
                $sub_array[] = '<a href="'.base_url().'csr/edit/'.$row->id.'"><span class="glyphicon glyphicon-pencil"></span> </a> |
                                <a href="#confirm-modal" data-toggle="modal" data-id="'.$row->id.'" data-type="csr"><span class="glyphicon glyphicon-trash"></span> </a>';
               
                $data[] = $sub_array;  
          }  
          $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->csr->get_all_data(),  
                "recordsFiltered"  =>$this->csr->get_filtered_data(), 
                "data"  => $data  
          );  
          echo json_encode($output);  
    }  
    
    function add(){
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Link field is required.'));
            
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
         	    $this->load->view('csr/add');
         	    $this->load->view('templates/footer');
			}
			else{
			    
			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/csr/" ; 
                if(!file_exists($path)) 
                {
                           mkdir($path, 0777, true);
                }
                $config = array(
                    'upload_path' => $path,
                    'allowed_types' => "jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'max_size' => "2048000", 
                    // 'max_height' => "600",
                    // 'max_width' => "800",
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
        				'img' => $idata['file_name'],
        				'date' => $this->input->post('year'),
        				);
        				
    				$data = $this->security->xss_clean($data);
    				$result = $this->csr->add_csr($data);
    				if($result){
    					$this->session->set_flashdata('success', 'CSR added successfully!');
    					redirect(base_url('csr'));
    				}
                }
			}
		}
		else{
            $this->load->view('templates/header');
     	    $this->load->view('csr/add');
     	    $this->load->view('templates/footer');
		}
    }
    
    function edit(){
        
        $id = $this->uri->segment(3);
        
        $data['csr'] = $this->csr->get_csr($id);
        
        if($this->input->post('submit')){
	
 			$this->form_validation->set_rules('title', 'Title', 'trim|required');
 			$this->form_validation->set_rules('description', 'Description', 'trim|required', array('required'=> 'The Description field is required.'));

			if ($this->form_validation->run() == FALSE) {
				$data = array(
					'errors' => validation_errors()
				);
				
				$this->session->set_flashdata('errors', $data['errors']);
				
				$this->load->view('templates/header');
         	    $this->load->view('csr/edit',$data);
          	    $this->load->view('templates/footer');

			}
			else {
			    
			    $image_data = '';
			    
			    if (!empty($_FILES['file']['name'])){
    			    $path= $_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/csr/";  
                    if(!file_exists($path)) 
                    {
                               mkdir($path, 0777, true);
                    }
                    $config = array(
                        'upload_path' => $path,
                        'allowed_types' => "jpg|png|jpeg",
                        'overwrite' => TRUE,
                        'max_size' => "2048000",
                        // 'max_height' => "600",
                        // 'max_width' => "800",
                        'file_name' => date('Ymdhis').'-'.$_FILES["file"]['name'],
                    );
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('file'))
                    { 
                        $data['errors'] =  $this->upload->display_errors();
                        
                        $this->session->set_flashdata('errors', $data['errors']);
                        
        				redirect('csr/edit/'.$id,'refresh');
                    }
                    else
                    {
                        $idata = $this->upload->data();
                        $image_data = $idata['file_name'];
                        
                        if(file_exists("assets/csr/".$this->input->post('prev')))
                            unlink($_SERVER["DOCUMENT_ROOT"]."/SayahHome/assets/csr/".$this->input->post('prev'));
                    }
			    } else {
			        $image_data = $this->input->post('prev');
			    }
				
				$data = array(
            		 		'title' => $this->input->post('title'),
            				'description' => $this->input->post('description'),
            				'img' => $image_data,
            				'date' => $this->input->post('year'),
        				);
				
				$data = $this->security->xss_clean($data);
				$result = $this->csr->update_csr($data, $id);
				
				if($result){
					$this->session->set_flashdata('success', 'CSR updated successfully!');
					redirect(base_url('csr'));
				}
			}
		}
		else{
		    
            $this->load->view('templates/header');
     	    $this->load->view('csr/edit', $data);
     	    $this->load->view('templates/footer');
		}
    }
}
?>