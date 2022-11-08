<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_department =[
            ['user_id'=>4,'department_id'=> 27],
        ];
        DB::table('user_departments')->insert($user_department);
    }
}
