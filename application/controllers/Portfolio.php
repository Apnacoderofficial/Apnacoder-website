<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Portfolio';
		$data['heading']	= 'Apna Coder - Design-Deploy-Grow';
		$data['main_content']	= 'test';
		$data['file']	= 'home';
		$this->load->view('include/head1',$data);
		$this->load->view('portfolio');
		$this->load->view('include/footer1',$data);
	}

	public function web()
	{
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Portfolio Details';
		$data['heading']	= 'Apna Coder - Design-Deploy-Grow';
		$data['main_content']	= 'test';
		$data['file']	= 'home';
		$this->load->view('include/head1',$data);
		$this->load->view('portfolio-details');
		$this->load->view('include/footer1',$data);
	}
 
		
}
