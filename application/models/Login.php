<?php

class Login extends CI_Model
{

    function cek_login($where)
    {
        return $this->db->get_where('sys_users', $where);
    }
}
