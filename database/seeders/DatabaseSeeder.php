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
        $this->call(UserRolesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
