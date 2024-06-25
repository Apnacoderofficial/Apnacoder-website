<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy_model extends CI_Model {

    public function policy() {
        $query = $this->db->get('website_settings');
         return $query->row(); // Return a single 
    }

}
