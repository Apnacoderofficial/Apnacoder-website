<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quote extends CI_Controller {

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
		$this->load->view('include/head',$data);
		$this->load->view('quote');
		$this->load->view('include/footer',$data);
	}
    
}