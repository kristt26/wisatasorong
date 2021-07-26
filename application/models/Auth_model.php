<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($data)
    {
        // $this->load->library('mylib');
        $username = $data['username'];
        $password = $data['password'];
        $item = $this->db->query("SELECT
            `users`.`id`,
            `users`.`nama`,
            `users`.`username`,
            `users`.`password`,
            `users`.`email`,
            `roles`.`role`
        FROM
            `users`
            LEFT JOIN `usersinroles` ON `usersinroles`.`usersid` = `users`.`id`
            LEFT JOIN `roles` ON `usersinroles`.`rolesid` = `roles`.`id`
        WHERE users.email = '$username' OR users.username = '$username'")->row_array();
        if (is_null($item)) {
            return false;
        } else {
            if (password_verify($password, $item['password'])) {
                return $item;
            } else {
                return false;
            }
        }
    }

    public function check()
    {
        $result = $this->db->query("SELECT COUNT(*) AS num FROM users")->row_object();
        if ((int) $result->num == 0) {
            $roles = [['role' => 'Admin'], ['role' => 'guest']];
            $this->db->trans_begin();
            foreach ($roles as $key => $role) {
                if ($role['role'] == 'Admin') {
                    $this->db->insert('roles', $role);
                    $role['id'] = $this->db->insert_id();
                    $this->db->insert('users', ['nama' => 'Administrator', 'username' => 'Administrator', 'password' => password_hash('Admin123', PASSWORD_DEFAULT), 'email' => 'administrator@mail.com']);
                    $userid = $this->db->insert_id();
                    $this->db->insert('usersinroles', ['rolesid' => $role['id'], 'usersid' => $userid]);
                } else {
                    $this->db->insert('roles', $role);
                }
            }
            if ($this->db->trans_status()) {
                $this->db->trans_commit();
            } else {
                $this->db->trans_rollback();
            }
        }
    }

    public function counter($data)
    {
        $this->db->insert('counter', $data);
    }

    public function getcounter()
    {
        $tanggal = date("Y-m-d");
        return $this->db->query("SELECT
            (SELECT COUNT(*) FROM lokasi WHERE type='Wisata') AS `Wisata`,
            (SELECT COUNT(*) FROM lokasi WHERE type='UMKM') AS `UMKM`,
            (SELECT COUNT(*) FROM users) AS `user`,
            (SELECT COUNT(*) FROM counter WHERE tanggal = '$tanggal') AS counthari,
            (SELECT COUNT(*) FROM counter ) AS counttotal")->row_array();
    }
}

/* End of file Auth_model.php */
