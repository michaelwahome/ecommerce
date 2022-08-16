<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'tbl_users';
    
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['first_name', 'last_name', 'email', 'password', 'gender', 'role', 'is_deleted'];

    public function getUser($email = false)
    {
        if ($email === false) {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['email' => $email])
                    ->first();
    }
}