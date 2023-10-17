<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'  => 'admin',
                'email' => 'admin@gmail.com',
                'password'  =>  password_hash('admin',PASSWORD_BCRYPT)
            ],
            [
                'username'  => 'user',
                'email' => 'user@gmail.com',
                'password'  =>  password_hash('user',PASSWORD_BCRYPT)
            ]
        ];
        $this->db->table('user')->insertBatch($data);
    }
}