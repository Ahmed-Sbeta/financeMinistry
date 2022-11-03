<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@finance.com',
            'work_id' => '123456789',
            'role_id' => 1,
            'phoneNumber' => '0911111111',
            'image' => 'user.png',
            'password' => bcrypt('11111111'),
        ]);
    }
}
