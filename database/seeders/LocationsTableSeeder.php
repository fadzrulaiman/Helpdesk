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
            ['name'=>'Semporna','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Tawau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kunak','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Lahad Datu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kota Kinabatangan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Beluran','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Sandakan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kota Kinabalu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Papar','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kudat','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'ota Marudu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Pitas','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kota Belud','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Ranau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Tuaran','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Beaufort','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Kuala Penyu','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Sipitang','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Tenom','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Tambunan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Keningau','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Labuan','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],
            ['name'=>'Headquaters','created_at'=> Carbon::now(),'updated_at'=> Carbon::now()],];
            DB::table('locations')->insert($location);
        }
    }