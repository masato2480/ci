<?php
    class Newslist extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('newslist_model');
        }
    
        function index(){
            $data['error']='ユーザー名かパスワードが間違っています';
            $data['records'] = $this->newslist_model->get_data();
            $this->load->view('newslist', $data);
        }
        
        function getnews(){
            //$data['records'] = $this->newslist_model->get_data();
            
            $data = $this->newslist_model->get_data();
            echo json_encode($data);
            
            //$this->set_content_type('application/json')->set_output(json_encode($data));
            //$this->load->view('getnews',$data);
        }
        
        function logout()
        {
            $this->session->sess_destroy();
            redirect('auth');
        }
        
        function addnews(){
            $this->load->view('addnews');
        }
        
        function verify_add(){
            if($this->_input_check() == false){
                $this->load->view('addnews');
                return;
            }
            $this->newslist_model->add($this->input->post());
            $this->load->view('verify_add');
        }
        
        function editnews(){
            $id = $this->input->get('id');
            $data['record'] = $this->newslist_model->get_id($id);
            $this->load->view('editnews', $data);
        }
        
        function verify_edit(){
            if($this->_input_check() == false){
                $id = $this->input->post('id');
                $data['record'] = $this->newslist_model->get_id($id);
                $this->load->view('editnews',$data);
                return;
            }
            $this->newslist_model->edit($this->input->post());
            $this->load->view('verify_edit');
        }
        
        function deletenews(){
            $this->newslist_model->delete($this->input->post('id'));
            redirect('newslist');
        }
        
        private function _input_check(){
            $this->form_validation->set_rules('title','タイトル','trim|required');
            $this->form_validation->set_rules('content','内容','trim|required');
            $this->form_validation->set_rules('open_time','公開日','trim|required');
            $this->form_validation->set_rules('flag','公開条件','required');
            return $this->form_validation->run();
        }
    }
?>