<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name'=>'Hardware - Desktop','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hardware - Laptop','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hardware - Printers','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hardware - UPS','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Software - Installation & Deployment','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Software - Operating System','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Software - Incident/Issue','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Network - Network Equipment','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Network - Connection & Line','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Network - Call Centre Related','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Network - Incident/Issue','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'ASIS - User Unlock Password (Forgotten Password)','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'ASIS - Incident/Issue','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'RAMCO - User Unlock Password (Forgotten Password)','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'RAMCO - Incident/Issue','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'EMAIL - User Unlock Password (Forgotten Password)','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'EMAIL - Incident/Issue','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
        ];
            DB::table('category')->insert($category);
    }
}
