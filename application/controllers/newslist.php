<?php

    class Newslist extends CI_Controller{
        
        function __construct()
        {
            //constructer
            parent::__construct();
            
            //helper
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            
            //database
            $this->load->database();
        
            //output
            $this->output->set_header('Content-Type: text/html; charset=UTF-8');
        }
    
        function index(){
            //insert database to variable
            $data['records']=$this->db->get('news')->result_array();
            
            //load
            $this->load->view('newslist', $data);
        }
        
        function add(){
            $this->form_validation->set_rules('title', 'タイトル', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('add');
            }else{
                $this->load->view('success');
            }
            
        }
        
        function edit(){
            
        }
        
        function delete(){
            
        }
    }
?>