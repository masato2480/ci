<?php
    class Auth extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('admin');
        }
        
        public function index()
        {
            $data['username'] = "";
            $data['password'] = "";
            $data['next'] = "";
            $data['error'] = "";
            $this->load->view('login_form', $data);
        }
        
        public function login($next='')
        {
            // after login
            if($this->session->userdata('is_login') == TRUE) {
                redirect($next);
            }
            
            // before login
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $next = $this->input->post('next');
                // hidden value from <INPUT> when login NG
            }
            
            // validation rules
            $this->form_validation->set_rules('username', 'ユーザー名', 'required');
            $this->form_validation->set_rules('password', 'パスワード', 'required');
            
            // validation check
            if ($this->form_validation->run() == TRUE) {
                //login check
                if ($this->admin->db_check($username, $password) == TRUE) {
                    //login OK
                    $this->session->sess_destroy();
                    $this->session->sess_create();
                    $this->session->set_userdata(array('is_login' => TRUE));
                    $this->session->set_userdata(array('username' => $username));
                    redirect('newslist');
                }else{
                    $data['error'] = "ユーザー名かパスワードが間違っています";
                }
            }
            
            // when first access OR validation error OR login NG
            $data['username'] = $username;
            $data['password'] = $password;
            $data['next'] = $next;
            $this->load->view('login_form', $data);
        }
        
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('');
        }
    }
?>