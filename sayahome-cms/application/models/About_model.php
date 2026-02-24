<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {
    
    public function about()
    {
        $this->db->order_by('created_at','desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    
     var $table = "about_vision_mission";  
      var $select_column = array("id", "alias"); 
      
      var $order_column = array(null, "alias");  
      
      function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
           
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("alias", $_POST["search"]["value"]); 
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
      
      function make_datatables($tb = NULL){  
           $this->make_query($tb);  
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
      
      function add_award($data)
      {
          $this->db->insert($this->table, $data);
		  return true;
      }
      
      function get_about($id)
      {
          $query = $this->db->get_where($this->table, array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function get_message($id)
      {
          $query = $this->db->get_where('about_message', array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_award($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update($this->table, $data);
		    return true;
	   }
	   
	   function update_chairman($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update('about_message', $data);
		    return true;
	   }
	    
}
?>