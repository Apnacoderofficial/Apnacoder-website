<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
	   $data['title'] 		= 'About Us';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'About Us';
		$data['file']	= 'about';
		$this->load->view('include/head1',$data);
		$this->load->view('about');
		$this->load->view('include/footer1',$data);
	}
}
