<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_all_user()
    {
        $this->db->select('*');
        $this->db->from('users');

        return $this->db->get();
    }
}