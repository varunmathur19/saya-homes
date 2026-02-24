<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Enquire_model extends CI_Model {
    
    public function enquire($fromdate = NULL,$todate = NULL)
    {
        $this->db->select('*');
        $this->db->from('footer_form');
        if(!empty($fromdate) && !empty($todate)){
            $this->db->where('created_at >=', $fromdate);
            $this->db->where('created_at <=', $todate);
        }
        $this->db->order_by('created_at','desc');
        $query = $this->db->get();
        return $query->result_array();
          
    }
    
     var $table = "footer_form";  
      var $select_column = array("id", "fname", "lname", "phone","emailid","selectone","msg","created_at"); 
      
      var $order_column = array(null, "fname", "lname", "phone","emailid","selectone","msg","created_at");  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
          if(isset($_POST["search"]["value"]))  
          {  
                $this->db->like("fname", $_POST["search"]["value"]);  
                $this->db->or_like("lname", $_POST["search"]["value"]);
                $this->db->or_like("emailid", $_POST["search"]["value"]);
                 $this->db->or_like("phone", $_POST["search"]["value"]);
          }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      } 
}
?>