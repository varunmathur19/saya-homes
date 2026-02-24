<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {
    
     var $table = "events_gallery";  
      var $select_column = array("id", "event_id", "media"); 
      
      var $order_column = array(null, "media");  
      
      function make_query($id)  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
        $this->db->where(array('event_id' => $id));
           
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("media", $_POST["search"]["value"]); 
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
      
      function make_datatables($id){  
           $this->make_query($id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      } 
      
      function get_filtered_data($id){  
           $this->make_query($id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }  
      
      function get_all_data($id)  
      {  
           $this->db->select("*"); 
           $this->db->where(array('event_id' => $id));
           $this->db->from($this->table);
           return $this->db->count_all_results();  
      } 
      
      function add_gallery($data)
      {
          $this->db->insert($this->table, $data);
		  return $this->db->insert_id();
      }
      
      function get_gallery($id)
      {
          $query = $this->db->get_where($this->table, array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_gallery($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update($this->table, $data);
		    return true;
	   }
	    
}
?>