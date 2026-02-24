<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('Enquire_model');
        $this->load->library('form_validation');
        $this->load->library('PHPExcel');
    }
    
    public function index()
 	{ 
 	    $this->load->view('templates/header');
 	    $data['enquire_data']= $this->Enquire_model->enquire();
 	    $this->load->view('enquiry',$data);
 	    $this->load->view('templates/footer');
 	}
 	
 	function fetch_user(){  
           $this->load->model("Enquire_model");  
           $fetch_data = $this->Enquire_model->make_datatables();  
           
         
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = $row->fname;  
                $sub_array[] = $row->lname;
                $sub_array[] = $row->emailid;
                $sub_array[] = $row->phone;
                $sub_array[] = $row->selectone;
                $sub_array[] = $row->msg;
                $sub_array[] = $row->created_at;
               
                $data[] = $sub_array;  
           }  
           $output = array(
                "draw"      => intval(($_POST['draw'])),  
                "recordsTotal"  =>$this->Enquire_model->get_all_data(),  
                "recordsFiltered"  =>$this->Enquire_model->get_filtered_data(), 
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
 	    
 	    $data['enquire_data']= $this->Enquire_model->enquire($fromdate,$todate);
 
        // Field names in the first row
        $fields = array('fname' => 'First Name', 'lname' => 'Last Name', 'emailid' => 'Email', 'phone' => 'Phone Number', 'selectone' =>  'Select One' , 'msg' => 'Message','created_at'=>'Date');
        $col = 0;
        foreach ($fields as $field)
        {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
            $col++;
        }
 
        // Fetching the table data
        $row = 2;
        foreach($data['enquire_data'] as $data)
        {
            $col = 0;
            foreach ($fields as $index => $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data[$index]);
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