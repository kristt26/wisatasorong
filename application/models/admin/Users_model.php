<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{

    public function get()
    {
        return $this->db->query("SELECT
            `users`.`nama`,
            `users`.`username`,
            `users`.`email`,
            `usersinroles`.`usersid`,
            `usersinroles`.`rolesid`,
            `roles`.`role`
        FROM
            `users`
            LEFT JOIN `usersinroles` ON `users`.`id` = `usersinroles`.`usersid`
            LEFT JOIN `roles` ON `usersinroles`.`rolesid` = `roles`.`id`")->result_array();
    }

    public function post($data)
    {
        
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->trans_begin();
        $this->db->insert('users', $data);
        $usersid = $this->db->insert_id();
        $role = $this->db->get_where('roles', ['role'=>'Guest'])->row_array();
        $item = [
            'usersid'=> $usersid,
            'rolesid'=> $role['id']
        ];
        $this->db->insert('usersinroles', $item);
        if($this->db->trans_status()){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
    }

}

/* End of file Users_model.php */
