<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function LoginUser($user, $pass)
    {
        return $this->db->table('user')->where([
            'username' => $user,
            'password' => $pass
        ])->get()->getRowArray();
    }
}
