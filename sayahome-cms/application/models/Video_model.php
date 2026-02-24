<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_model extends CI_Model {
    
    public function electronic_media()
    {
        $this->db->order_by('created_at','desc');
        $query = $this->db->get_where('press_release');
        return $query->result_array();
          
    }
    
     var $table = "electronic_media";  
      var $select_column = array("id", "link", "title"); 
      
      var $order_column = array(null, "link", "title");  
      function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  

        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("link", $_POST["search"]["value"]);
            $this->db->like("title", $_POST["search"]["value"]);
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
      
      function add_video($data)
      {
          $this->db->insert('electronic_media', $data);
		  return true;
      }
      
      function get_video($id)
      {
          $query = $this->db->get_where('electronic_media', array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_video($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update('electronic_media', $data);
		    return true;
	   }
	    
}
?>