<?php
    class Addnews extends CI_Model{
    
        function __construct(){
            parent::__construct();
        }
        
        function get_data(){
            $query = $this->db->get('news');
            return $query->result();
        }
        
        function get_data_by_id($id){
            $query = $this->db->get_where('blog', array('id' => id));
            return $query->result();
        }
        
        function add($post){
            $data['title'] = $post['title'];
            $data['content'] = $post['content'];
            $data['flag'] = $post['flag'];
            $this->db->insert('news', $data);
        }
        
        function edit($post){
            $data['title'] = $post['title'];
            $data['content'] = $post['content'];
            $data['flag'] = $post['flag'];
            $this->db->where('id', $post['id']);
            $this->db->update('news', $data);
        }
    }
?>