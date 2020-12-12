<?php

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\Hash;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Admin User',
            'email' => 'mansoor.zaheer994@gmail.com',
            'password' => '$2y$10$elnTpsmxikPBYQB1UsJDbuMrrDjU7tEqnVtCp1y99sq7sPp0Y84Qm'
        ]);

    }
}