<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Popup_enquiry extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
      $this->load->model('Popup_model');
	 $this->load->library('form_validation');
	 $this->load->library('PHPExcel');
	
      }
    
    public function index()
 	{ 
    	if(!$this->session->has_userdata('username')){
    		redirect("login");
    	}
	
 	    $this->load->view('templates/header');
 	    $data['popup_data']= $this->Popup_model->popup();
 	    $this->load->view('popup',$data);
 	    $this->load->view('templates/footer');
	
	
 	}
 		function fetch_user(){  
           $this->load->model("Popup_model");  
           $fetch_data = $this->Popup_model->make_datatables();  
           
         
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = $row->name;
                $sub_array[] = $row->email;
                $sub_array[] = $row->mobile;
                // $sub_array[] = $row->city;
                // $sub_array[] = $row->country;
                $sub_array[] = $row->type;
                $sub_array[] = $row->message;
                $sub_array[] = $row->utm_source;
                $sub_array[] = $row->utm_medium;
                $sub_array[] = $row->utm_campaign;
                $sub_array[] = $row->utm_content;
                $sub_array[] = $row->utm_term;
                $sub_array[] = $row->created_date;
                  
                $data[] = $sub_array;  
           }  
           $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->Popup_model->get_all_data(),  
                "recordsFiltered"  =>$this->Popup_model->get_filtered_data(), 
                "data"  => $data  
           );  
           echo json_encode($output);  
      }  

 	
 	public function export(){
 	    $fromdate = $this->input->post('from_date');
 	    $todate = $this->input->post('to_date');
 	      //print_r($_POST);die;
 	    $objPHPExcel = $this->excel;
 	    
 	    $objPHPExcel->setActiveSheetIndex(0);
 	    
 	    $data['pop_data']= $this->Popup_model->popup($fromdate,$todate);
 
        // Field names in the first row
        $fields = array('name' => 'Name','email' => 'Email','mobile' =>  'Mobile' , 'type'=>'type','message' => 'message','utm_source'=>'utm_source','utm_medium'=>'utm_medium','utm_campaign'=>'utm_campaign','utm_content'=>'utm_content','utm_term'=>'utm_term','created_date'=>'Date');
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Fetching the table data
        $row = 2;
        foreach($data['pop_data'] as $data)
        {
            $col = 0;
			//print_r($data);
			
			 
            foreach ($fields as $index => $field)
            {
				$value = $data[$index];
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $value);
                $col++;
            }
 
            $row++;
        }
 
        $objPHPExcel->setActiveSheetIndex(0);
         
        $filename='Enquiry.xls'; 
        header('Content-Type: application/vnd.ms-excel'); 
        header('Content-Disposition: attachment;filename="'.$filename.'"'); 
        header('Cache-Control: max-age=0'); 
                    
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
        $objWriter->save('php://output');
 	}

}
?>