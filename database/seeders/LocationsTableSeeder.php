<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $location = [
            ['name'=>'Hospital Semporna','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tawau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kunak','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Lahad Datu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Kinabatangan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Beluran','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Duchess of Kent Sandakan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Queen Elizabeth','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Queen Elizabeth II','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Bukit Padang','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Makmal Kesihatan Awam (MKA)','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Papar','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kudat','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Marudu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Pitas','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kota Belud','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Ranau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tuaran','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Wanita dan Kanak-Kanak Sabah','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Beaufort','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Kuala Penyu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Sipitang','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tenom','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Tambunan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Keningau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Hospital Labuan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Headquaters','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],];
            DB::table('locations')->insert($location);
        }
    }