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

}

/* End of file Users_model.php */
