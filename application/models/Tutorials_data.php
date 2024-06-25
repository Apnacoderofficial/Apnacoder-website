<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorials_data extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function tutorials()
    {
        $query = $this->db->get('main_tutorials');
        return $query->result();
    }
     public function get_tutorials($link)
    {
        $this->db->where('link', $link);
        $query = $this->db->get('main_tutorials');
        return $query->row(); // Return a single 
    }
    public function search($query) {
        $this->db->select('*');
        $this->db->from('main_tutorials'); // Replace 'your_table_name' with your actual table name
        $this->db->like('title', $query);
        $this->db->or_like('description', $query);
        $query = $this->db->get();
        return $query->result();
    }

}
