<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 * 
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->library('session');
		

	    }
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function index1()
	{
		$this->load->view('welcome_message1');
	}

	public function formpost()
{
    
	print_r($this->input->post('name'));
    print_r($this->input->post('email'));
   
    print_r($this->input->post());
   
    print_r($_POST['name']);
    print_r($_POST['email']);
    print_r($_POST);
    die;
}
}
