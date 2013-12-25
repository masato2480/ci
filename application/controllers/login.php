<?php 
class Login extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		
        $this->load->helper(array('form', 'url'));
		
        $this->load->library('form_validation');
        
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
    }
	
	function index()
	{
        $error = '';
		$this->load->view('login', $error);
	}
}
?>