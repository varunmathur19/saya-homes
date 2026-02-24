<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coverage_model extends CI_Model {
    
    public function pressrelease()
    {
        $this->db->order_by('created_at','desc');
        $this->db->where('title !=' , 'video');
        $this->db->where('status' , '1');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
     var $table = "press_release";  
      var $select_column = array("id", "publisher", "title", "description", "pub_date"); 
      
      var $order_column = array(null, "publisher", "title", "description", "pub_date");  
      
      function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
        $this->db->where('status', '1');
        $this->db->where('title !=' , 'video');
           
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("publisher", $_POST["search"]["value"]); 
            $this->db->like("title", $_POST["search"]["value"]); 
            $this->db->like("description", $_POST["search"]["value"]); 
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
           $this->db->where('status', '1');
           $this->db->where('title !=' , 'video');
           
           return $this->db->count_all_results();  
      } 
      
      function add_coverage($data)
      {
          $this->db->insert('press_release', $data);
		  return true;
      }
      
      function get_coverage($id)
      {
          $query = $this->db->get_where('press_release', array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_coverage($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update('press_release', $data);
		    return true;
	   }
	    
}
?>