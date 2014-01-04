<?php
    class Newslist_model extends CI_Model{
        function __construct(){
            parent::__construct();
            $this->load->helper('date');
        }
        
        function get_data(){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        
        function add($post){
            $data['id'] = NULL;
            $data['title'] = $post['title'];
            $data['content'] = $post['content'];
            $data['up_time'] = date('Y-m-d H:i:s',now());
            $data['open_time'] = date('Y-m-d H:i:s', strtotime($post['open_time']));
            $data['flag'] = $post['flag'];
            $this->db->insert('news', $data);
            
        }
        
        function get_id($id){
            $query = $this->db->get_where('news',array('id'=>$id));
            return $query->result_array();
        }
        
        function edit($post){
            $data['title'] = $post['title'];
            $data['content'] = $post['content'];
            $data['up_time'] = date('Y-m-d H:i:s',now());
            $data['open_time'] = date('Y-m-d H:i:s', strtotime($post['open_time']));
            $data['flag'] = $post['flag'];
            $this->db->where('id',$post['id']);
            $this->db->update('news',$data);
        }
    }
?>