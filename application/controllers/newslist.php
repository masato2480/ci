<?php

    class Newslist extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->output->set_header('Content-Type: text/html; charset=UTF-8');
        }
    
        function index(){
            $data['records']=$this->db->get('news')->result_array();
            $this->load->view('newslist', $data);
        }
        
        function logout()
        {
            $this->session->unset_userdata('logged_in');
            redirect('login', 'refresh');
        }
    }
?>