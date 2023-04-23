<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'role' => 'super_admin',
                'password' => '$2y$10$b2kOpbidVeSBg0N42BzMy.4EPqeZlLRMKvKtL8B.B8Yc.ELx/hptm',
            ]
        ];

        foreach($users as $key => $value){
            User::create($value);
        }
    }
}
