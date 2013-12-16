<?php 
class Login extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('form'));
        $this->load->helper('url');
		$this->load->helper('form');
		
		$this->load->library('session');
		$this->load->library('form_validation');
        
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		
        $fields['login_name'] = 'Login Name';
        $fields['login_password'] = 'Login Password';
        
        $this->form_validation->set_rules('login_name', 'Login Name', 'trim|required|max_length[20]');
        $this->form_validation->set_rules('login_password', 'Login Password', 'trim|required|max_length[20]');
        
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
    
        //rulesの方法その１
		//$this->form_validation->set_rules('login_name', 'Login Name', 'required');
		//$this->form_validation->set_rules('login_Password', 'Login Password', 'required');
        
        //fieldsとrulesの方法その２
		//$fields['login_name'] = 'Login Name';
		//$fileds['login_password'] = 'Login Password';
		//$this->validation->set_fields($fields);
		//$rules['login_name'] = "trim|required|max_length[20]";
		//$rules['login_password'] = "trim|required|max_length[20]";
		//$this->validation->set_rules($rules);
	}
	
	
	function index()
	{
		//ランダムチケットを生成し、セッションに保存する。
		//$this->ticket = md5(uniqid(mt_rand(),TRUE));
		//$this->session->set_userdata('ticket', $this->ticket);
		
		//入力ページ（form）のビューをロードし、表示する。
		$this->load->view('login');
	}
}
?>