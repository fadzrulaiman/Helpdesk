<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $label = [
            ['name'=>'Urgent','color'=>'#F32121','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
        ];
            DB::table('labels')->insert($label);
    }
}
