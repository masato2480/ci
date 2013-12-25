<?php
    //コントローラ
    class VerifyLogin extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('user');
            $this->load->library('form_validation');
        }
        
        function index(){
            /*
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('login');
            }else{
                redirect('newslist', 'reflesh');
            }
             */
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if($username == ''){
                //redirect ('login', 'reflesh');
                $error = 'error!!!!';
                $this->load->view('login', $error);
            }
            
            $result = $this->user->login($username, $password);
            
            /*
            $sess_array = array();
            foreach($result as $row){
                $sess_array = array(
                'id' => $row->id,
                'username' => $row->username,
                );
            }
             */
            if($result){
                redirect ('newslist', 'reflesh');
            }else{
                redirect ('login', 'reflesh');
            }
            
            /*
            if($result){
                $sess_array = array();
                foreach($result as $row){
                    $sess_array = array(
                                        'id' => $row->id,
                                        'username' => $row->username,
                                        );
                    $this->session->set_userdata('logged_in', $sess_array);
                }
                
            }else{
                $this->form_validation->set_message('check_database', 'Invalid username or password');
                return false;
             }
            */
        }
    }
?>