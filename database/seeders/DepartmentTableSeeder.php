<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department =[
            ['name'=>'Hospital Semporna','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tawau','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kunak','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Lahad Datu','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Kinabatangan','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Beluran','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Duchess of Kent Sandakan','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Queen Elizabeth','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Queen Elizabeth II','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Bukit Padang','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Makmal Kesihatan Awam (MKA)','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Papar','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kudat','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Marudu','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Pitas','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Belud','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Ranau','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tuaran','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Wanita dan Kanak-Kanak Sabah','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Beaufort','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kuala Penyu','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Sipitang','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tenom','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tambunan','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Keningau','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Labuan','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Headquaters','all_agents'=> '0','public'=> '1', 'created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
        ];
        DB::table('departments')->insert($department);
    }
}