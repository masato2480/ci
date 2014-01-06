<?php
    class Getnews extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('newslist_model');
        }
        
        function index(){
            $data['records'] = $this->newslist_model->get_data();
            $data = $this->newslist_model->get_data();
            echo json_encode($data);
        }
    }
?>