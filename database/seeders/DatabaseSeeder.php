<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(allMinistrySeeder::class);
        $this->call(subMinistrySeeder::class);
        $this->call(sub2MinistrySeeder::class);
        $this->call(ItemsSeeder::class);



    }
}
