<?php

    class Newslist extends CI_Controller{
        
        function __construct()
        {
            //コンストラクタ
            parent::__construct();
            
            //form(フォームタグ）とurl（viewに送るためのリンク先）のヘルパー
            $this->load->helper(array('form', 'url'));
            
            //フォーム入力が妥当かどうか
            //$this->load->library('form_validation');
            
            //データベース接続
            $this->load->database();
        
            //ビュー側でなんか読み込む
            $this->output->set_header('Content-Type: text/html; charset=UTF-8');
        }
    
        function index(){
            //データベースNotifySystemのテーブルnewsのデータを読み込む
            $data['records']=$this->db->get('news')->result_array();
            
            //ビューの'newslist.php'を読み込む
            $this->load->view('newslist', $data);
            
            //ログインからのセッション保持
            /*
            if($this->session->userdata('logged_in'))
            {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $this->load->view('newslist', $data);
            }
            else
            {
                redirect('login', 'refresh');
            }
             */
        }
        
        function logout()
        {
            $this->session->unset_userdata('logged_in');
            //↓必要ないかもしれない
            session_destroy();
            redirect('login', 'refresh');
        }
    }
?>