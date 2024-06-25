<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()  
    {  
        parent::__construct();   
    }
		public function index()
	{
	    $data['title'] 		= 'Project';
		$data['heading']	= 'ApnaCoder';
		$this->load->view('include/head',$data);
		$this->load->view('project');
		$this->load->view('include/footer',$data);
	}
    
}