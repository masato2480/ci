<?php 
class Login extends CI_Controller{
	function __construct()
	{
        //コンストラクタ
		parent::__construct();
		
        
		//form(フォームタグ）とurl（viewに送るためのリンク先）のヘルパー
        $this->load->helper(array('form', 'url'));
		
        //フォーム入力が妥当かどうか
        $this->load->library('form_validation');
        
        //ビュー側でなんか読み込む
		$this->output->set_header('Content-Type: text/html; charset=UTF-8');
    }
	
	function index()
	{
        
		$this->load->view('login');
	}
}
?>