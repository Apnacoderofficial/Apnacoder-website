<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

      public function fetchservices()
    {
        $query = $this->db->get('freeservices');
        return $query->result();
    }

}
