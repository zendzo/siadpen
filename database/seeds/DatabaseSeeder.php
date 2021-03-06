<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RuangKelasTableSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(SiswaSeeder::class);
    }
}
