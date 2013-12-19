<?php

    class Newslist extends CI_Controller{
        
        function __construct()
        {
            //constructer
            parent::__construct();
            
            //helper
            $this->load->helper('url');
            $this->load->helper(array('form'));
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
    }
?>