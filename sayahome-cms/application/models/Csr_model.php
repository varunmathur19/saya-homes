<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Csr_model extends CI_Model {
    
    public function csr()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        
        return $query->result_array();
    }
    
     var $table = "csr";  
      var $select_column = array("id", "title", "description", "img"); 
      
      var $order_column = array(null, "title", "description");  
      
      function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
           
        if(isset($_POST["search"]["value"]))  
        {  
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
           
           return $this->db->count_all_results();  
      } 
      
      function add_csr($data)
      {
          $this->db->insert('csr', $data);
		  return true;
      }
      
      function get_csr($id)
      {
          $query = $this->db->get_where('csr', array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_csr($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update('csr', $data);
		    return true;
	   }
	    
}
?>