<?php
    class Admin extends CI_Model
    {
        function db_check($username='', $password='')
        {
            $this->db->where('username', $username);
            $query = $this->db->get('admin');
            if (0 < $query->num_rows()) {
                $row = $query->row();
                if($row->password == md5($password)) {
                    return TRUE;
                }
            }
            return FALSE;
        }
    }
?>