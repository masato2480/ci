<?php
    
    class Addnews extends CI_Controller{
        
        function __construct()
        {
            parent::__construct();
            
            $this->load->helper('url');
            $this->load->helper(array('form'));
            $this->load->database();
            
            
            
            $this->output->set_header('Content-Type: text/html; charset=UTF-8');
        }
        
        //一覧表示を行う
        function index(){
            $this->load->model('addnews', '', TRUE); //addnewsモデルを呼び出し
            $data['list'] = $this->addnews->get_data(); //addnewsモデルの昨日呼び出し
            $this->load->view('addnews', $data);
        }
    }
?>