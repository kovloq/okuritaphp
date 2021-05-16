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
        	["name"=>'EMS'], // https://www.post.japanpost.jp/int/ems/country/all_en.html https://www.post.japanpost.jp/int/charge/list/ems_all_en.html
        	["name"=>'DHL'],
        	["name"=>'Airmail International Parcel'],// https://www.post.japanpost.jp/int/charge/list/parcel1.html#
        	["name"=>'SAL International Parcel'],//https://www.post.japanpost.jp/int/charge/list/parcel1.html#
        	["name"=>'Surface Mail International Parcel'], //https://www.post.japanpost.jp/int/charge/list/parcel1.html#
        	["name"=>'E-Packet'], //https://www.post.japanpost.jp/int/2021fee_change/index.html
        	["name"=>'E-Packet Lite'],//https://www.post.japanpost.jp/int/2021fee_change/index.html
            ["name"=>'Fedex']
        ));
    }
}
