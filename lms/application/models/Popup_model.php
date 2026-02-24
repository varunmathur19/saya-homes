<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Popup_model extends CI_Model {
    
    public function popup($fromdate = NULL,$todate = NULL)
    {
        $this->db->select('*');
        $this->db->from('enquire');
        if(!empty($fromdate) && !empty($todate)){
            $this->db->where('created_date >=', $fromdate);
            $this->db->where('created_date <=', $todate);
        }
        $this->db->order_by('created_date','desc');
        $query = $this->db->get();
        return $query->result_array();
          
    }
    
     var $table = "enquire";  
      var $select_column = array("name","email", "mobile","city","country","type","message", "created_date","utm_source","utm_medium","utm_campaign","utm_content","utm_term"); 
      
      var $order_column = array(null, "name","email", "mobile","city","country","type","message","created_date");  
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
          if(isset($_POST["search"]["value"]))  
          {  
                $this->db->like("name", $_POST["search"]["value"]);  
                $this->db->or_like("email", $_POST["search"]["value"]);  
                $this->db->or_like("mobile", $_POST["search"]["value"]); 
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