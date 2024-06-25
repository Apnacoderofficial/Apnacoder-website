<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

    public function book_demo($data) {
        return $this->db->insert('main_Book', $data);
    }

}
