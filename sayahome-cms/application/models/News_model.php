<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
    
    public function news()
    {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('created_at','desc');
        $query = $this->db->get();
        return $query->result_array();
          
    }
    
     var $table = "news";  
      var $select_column = array("id", "title", "description", "posted_on"); 
      
      var $order_column = array(null, "title", "description", "posted_on");  
      function make_query()  
      {  
        $this->db->select($this->select_column);  
        $this->db->from($this->table);  
        if(isset($_POST["search"]["value"]))  
        {  
            $this->db->like("title", $_POST["search"]["value"]);  
            $this->db->or_like("description", $_POST["search"]["value"]);
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
      
      function add_news($data)
      {
          $this->db->insert('news', $data);
		  return true;
      }
      
      function get_news($id)
      {
          $query = $this->db->get_where('news', array('id' => $id));
		  return $result = $query->row_array();
      }
      
      function update_news($data, $id){
		    $this->db->where('id', $id);
		    $this->db->update('news', $data);
		    return true;
	   }
	    
}
?>