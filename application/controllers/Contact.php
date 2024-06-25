<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()  
    {  
        parent::__construct(); 
        $this->load->database();
    }
		public function index()
	{
	    $data['title'] 		= 'Contact';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'Services';	// page name
		$data['file']	= 'services';
        $data['blog'] = $this->db->order_by('id', 'RANDOM')->limit(3)->get('website_blog')->result();
		$this->load->view('include/head1',$data);
		$this->load->view('contact',$data);
		$this->load->view('include/footer1',$data);
	}
	public function save_contact_form() {
    // Get form data
    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $subject = $this->input->post('subject');
    $message = $this->input->post('message');

    // Prepare data to be inserted into the database
    $data = array(
        'name' => $name,
        'email' => $email,
        'message' => $message
    );

    // Save data to the database
    $this->db->insert('website_contact_us', $data);

    // Optionally, you can redirect the user to a thank you page or display a success message
    redirect($_SERVER['HTTP_REFERER'] . '?show_popup=true');
}

    
}