<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public function select($id)
    {
        if (is_null($id)) {
            return $this->db->query("SELECT
                `pengguna`.`id`,
                `pengguna`.`usersid`,
                `pengguna`.`nama`,
                `pengguna`.`email`,
                `pengguna`.`kontak`,
                `pengguna`.`alamat`,
                `users`.`username`
            FROM
                `pengguna`
                LEFT JOIN `users` ON `users`.`id` = `pengguna`.`usersid`")->result();
        } else {
            return $this->db->query("SELECT
                `pengguna`.`id`,
                `pengguna`.`usersid`,
                `pengguna`.`nama`,
                `pengguna`.`email`,
                `pengguna`.`kontak`,
                `pengguna`.`alamat`,
                `users`.`username`
            FROM
                `pengguna`
                LEFT JOIN `users` ON `users`.`id` = `pengguna`.`usersid` WHERE pengguna.id = '$id'")->row_object();
        }
    }
    public function insert($data)
    {
        $result = $this->db->insert('users', $data);
        $data['id'] = $this->db->insert_id();
        if ($result) {
            return $data;
        } else {
            return false;
        }
    }
    public function update($data)
    {
        $item = [
            'users' => $data['users'],
        ];
        $this->db->where('id', $data['id']);
        $this->db->update('users', $item);
        return $item;
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
    
    
}
