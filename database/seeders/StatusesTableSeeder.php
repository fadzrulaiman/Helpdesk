<?php

namespace Database\Seeders;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status =[
            ['name'=>'Open', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Approved', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Resolved', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Closed', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
        ];
        DB::table('statuses')->insert($status);
    }
}
