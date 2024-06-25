<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct()  
    {  
        parent::__construct();   
    }
		public function index()
	{
	    $data['title'] 		= 'Services';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'Services';	// page name
		$data['file']	= 'services';
		$this->load->view('include/head1',$data);
		$this->load->view('service');
		$this->load->view('include/footer1',$data);
	}

	public function partners(){
	    $this->load->model('Blog_data');
	     $this->load->database();
		$data['title'] = 'ApnaCoder Partner Solutions';
		$data['blog_entries'] = $this->db->get('panel_partner_services')->result();

		$this->load->view('include/head', $data);

    	$this->load->view('partnersolutions', $data);

    	$this->load->view('include/footer');

	}
    
}