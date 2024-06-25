<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

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
	     $data['title'] 		= 'Apna Coder - Design-Deploy-Grow';
		$data['heading']	= 'Apna Coder - Design-Deploy-Grow';
		$data['main_content']	= 'test';
		$data['file']	= 'home';
	     $this->load->database();
		$data['blog_entries'] = $this->db->get('panel_partner_services')->result();
		$data['blog'] = $this->db->order_by('id', 'RANDOM')->limit(3)->get('website_blog')->result();
		$this->load->view('include/head',$data);
		$this->load->view('index');
		$this->load->view('include/footer',$data);
	}
    public function subscribe() {
        // Handle form submission
        $email = $this->input->post('email');
        $this->load->database();
        $this->db->insert('panel_newsletter', ['email' => $email]);
        
        // Redirect back to the previous page with a parameter indicating to show the pop-up
        redirect($_SERVER['HTTP_REFERER'] . '?show_popup=true');
    }
    public function submit_form() {
           
                // If validation passes, process the form data
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('mobile'),
                    'service' => $this->input->post('service'),
                    'message' => $this->input->post('message'),
                    'type' => 'quote'
                );

                $this->load->database();
                $this->db->insert('website_contact_us', $data);
                // Now you can do whatever you want with the form data
                // For example, you can save it to the database
                // $this->load->model('Form_model');
                // $this->Form_model->save_form_data($name, $email, $mobile, $service, $message);
    
                // Optionally, you can redirect the user to a thank you page
                redirect($_SERVER['HTTP_REFERER'] . '?show_popup=true');
        }
	public function help_center()
	{
	    $data['title'] 		= 'Help Center';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$this->load->view('include/head',$data);
		$this->load->view('Help-center');
		$this->load->view('include/footer',$data);
	}
		
}
