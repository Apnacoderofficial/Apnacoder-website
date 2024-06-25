<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct()  
    {  
        parent::__construct();  
	      $this->load->database(); // Load the database library
    }

    public function index() {
    $this->load->model('Blog_data');
    
    // Check if a search query is provided
    $search_query = $this->input->get('search');
    if (!empty($search_query)) {
        // Perform the search query
        $data['blog_entries'] = $this->Blog_data->search_blog($search_query);
    } else {
        // Load all blog entries if no search query is provided
        $data['blog_entries'] = $this->db->get('website_blog')->result();
    }
    
    // Set the title
    $data['title'] = 'Blog';
    
    // Load views
    $this->load->view('include/head1', $data);
    $this->load->view('blog', $data);
    $this->load->view('include/footer1', $data);
}

		public function viewBlog($link)
	{
	    $this->load->model('Blog_data'); // Load the Blog_data model
        $data['blogdata'] = $this->Blog_data->get_blog($link);
	    $data['title'] 		= 'View Blog';
		$data['heading']	= 'ApnaCoder';
		$data['main_content']	= 'test';
		$data['file']	= 'blog';
		$this->load->view('include/head1',$data);
		$this->load->view('view_blog',$data);
		$this->load->view('include/footer1',$data);
	}
	public function search() {
    $this->load->model('Blog_data'); // Load the correct model
    $search_query = $this->input->get('search'); // Get the search query from the URL parameter
    
    if (!empty($search_query)) {
        // Perform the search query
        $data['search_results'] = $this->Blog_data->search_blog($search_query);
    } else {
        $data['search_results'] = array(); // If search query is empty, return an empty array
    }
    
    // Pass the search results to the view
    $data['blog_entries'] = $data['search_results'];
    
    // Load the view to display search results
    $this->load->view('blog', $data);
}

		public function add_user_newsletters()
	{
	     $this->load->library('form_validation');
        
        // Set validation rules
        $this->form_validation->set_rules('firstName', 'firstName', 'required');
        $this->form_validation->set_rules('lastName', 'lastName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('404');
        } else {
            $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'email' => $this->input->post('email'),
            );

            // Load the Book_model and call the book_demo method to insert the data
            $this->load->model('Blog_data');
            $insert = $this->Blog_data->add_user_newsletter($data);
            echo 'alert("You are Subscribed")';
            redirect('blog');
        }

	}
	
	
}
