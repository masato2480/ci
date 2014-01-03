<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Controller extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('session');
            $this->load->helper('url');
            
            //login check
            if($this->session->userdata('is_login') != TRUE)
            {
                // next = redirect page
                if(!$this->session->userdata('next'))
                {
                    $this->session->set_userdata(array('next'=>$this->uri->uri_string()));
                }
                redirect('auth/login/'.$this->session->userdata('next'));
            }
        }
    }
    ?>