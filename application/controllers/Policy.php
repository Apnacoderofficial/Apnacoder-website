<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Policy extends CI_Controller {
     public function __construct()  
    {  
        parent::__construct();  
	      $this->load->database(); // Load the database library
	      $this->load->model('Policy_model','Policy_model');
    }

	
	public function index()
	{
	    $data['policy'] = $this->Policy_model->policy();
	     $data['title'] 		= 'Privacy Policy';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$this->load->view('include/head',$data);
		$this->load->view('policy.php');
		$this->load->view('include/footer',$data);
	}
	
	public function privacypolicy()
	{
	    $data['policy'] = $this->Policy_model->policy();
	     $data['title'] 		= 'Privacy Policy';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$this->load->view('include/head1',$data);
		$this->load->view('privacypolicy.php');
		$this->load->view('include/footer1',$data);
	}
	public function cookiespolicy()
	{
	    $data['policy'] = $this->Policy_model->policy();
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Cookies Policy';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$this->load->view('include/head',$data);
		$this->load->view('cookies-policy.php');
		$this->load->view('include/footer',$data);
	}
	public function termscondition()
	{
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Terms and Condition';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
	    $data['policy'] = $this->Policy_model->policy();
		$this->load->view('include/head1',$data);
		$this->load->view('termscondition.php');
		$this->load->view('include/footer1',$data);
	}
		public function refundcancellation()
	{
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Terms and Condition';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$data['policy'] = $this->Policy_model->policy();
		$this->load->view('include/head',$data);
		$this->load->view('refundcancellation.php');
		$this->load->view('include/footer',$data);
	}
		public function shipdelivery()
	{
	   // $data['title'] 		= 'Welcome ';
	     $data['title'] 		= 'Terms and Condition';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$data['policy'] = $this->Policy_model->policy();
		$this->load->view('include/head',$data);
		$this->load->view('shipdelivery.php');
		$this->load->view('include/footer',$data);
	}
    
}