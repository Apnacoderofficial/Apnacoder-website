<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {
    
     public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function index()
	{
	    $data['title'] 		= 'About Us';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'About Us';
		$query = $this->db->get('ci_sitemap');
        $data = $query->result_array();
		$this->load->view('Sitemap/Sitemap.php',['links' => $data]);
	}
}
