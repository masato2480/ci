<?php 
class Login extends Controller{
	function Login()
	{
		parent::Controller();
		
		$this->load->helper(array('form'));
		
		$this->load->library('session');
		
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
		
		$this->load->library('validation');
		$this->validation->set_error_delimiters('<div class="error">','</div>');
		
		$fields['login_name'] = 'Login Name';
		$fileds['login_password'] = 'Login Password';
		$this->validation->set_fields($fields);
		$rules['login_name'] = "trim|required|max_length[20]";
		$rules['login_password'] = "trim|required|max_length[20]";
		$this->validation->set_fields($rules);
	}
	
	function index()
	{
		//ランダムチケットを生成し、セッションに保存する。
		$this->ticket = md5(uniqid(mt_rand(),TRUE));
		$this->session->set_userdata('ticket', $this->ticket);
		
		//入力ページ（form）のビューをロードし、表示する。
		$this->load->view('form');
	}
}
?>