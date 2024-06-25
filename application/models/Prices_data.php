<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prices_data extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function Prices()
    {
        $query = $this->db->get('main_products');
        return $query->result();
    }
     public function get_blog($link)
    {
        $this->db->where('link', $link);
        $query = $this->db->get('main_products');
        return $query->row(); // Return a single 
    }
    public function add_user_newsletter($data) {
        return $this->db->insert('main_newsletter', $data);
    }

}
