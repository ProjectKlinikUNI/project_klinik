<?php
defined('BASEPATH') or exit('No direct script access allowed');

class users_modal extends CI_Model
{
    public function view()
    {
        $p = "SELECT *, sys_rules.rule_name FROM sys_users JOIN sys_rules ON sys_users.ruleid = sys_rules.rule_id";
        return $this->db->query($p)->result_array();
    }
    public function create()
    {
        $data = [
            'id_users' => $this->input->post('id_users'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'ruleid' => $this->input->post('ruleid'),
            'active' => $this->input->post('active'),
        ];
        $this->db->insert('sys_users', $data);
    }
    public function update()
    {
        $id_users = $this->input->post('id_users');
        $username = $this->input->post('username');
        $ruleid = $this->input->post('ruleid');
        $active = $this->input->post('active');

        $this->db->set('ruleid', $ruleid);
        $this->db->set('active', $active);
        $this->db->set('username', $username);
        $this->db->where('id_users', $id_users);
        $this->db->update('sys_users');
    }
    public function delete($id_users)
    {
        $this->db->where('id_users', $id_users);
        $this->db->delete('sys_users');
    }
}
