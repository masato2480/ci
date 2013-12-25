<?php
    class VerifyLogin extends CI_Controller
    {
        function __construct(){
            parent::__construct();
            $this->load->model('user');
            $this->load->library('form_validation');
        }
        
        function index(){
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $result = $this->user->login($username, $password);
            
            if($result){
                redirect('newslist', 'reflesh');
            }else{
                $data['error'] = 'Invalid your username or password!';
                $this->load->view('verifylogin', $data);
            }
        }
    }
?>