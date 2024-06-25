<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_data extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function blog()
{
    $this->db->order_by('createdat', 'desc');
    $query = $this->db->get('website_blog');
    return $query->result();
}

     public function get_blog($link)
    {
        $this->db->where('link', $link);
        $query = $this->db->get('website_blog');
        return $query->row(); // Return a single 
    }
    public function add_user_newsletter($data) {
        return $this->db->insert('main_newsletter', $data);
    }
    public function search_blog($search_query) {
        // Perform the search query
        $this->db->like('title', $search_query);
        $this->db->or_like('shortDescription', $search_query);
        $this->db->or_like('description', $search_query);
        $query = $this->db->get('website_blog');
        
        // Return the search results
        return $query->result();
    }

}
