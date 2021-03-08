<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shippings')->insert(array(
        	["name"=>'EMS'],
        	["name"=>'DHL'],
        	["name"=>'Airmail International Parcel'],
        	["name"=>'SAL International Parcel'],
        	["name"=>'Surface Mail International Parcel'],
        	["name"=>'Airmail Registered Small Package'],
        	["name"=>'SAL Registered Small Package']
        ));
    }
}
