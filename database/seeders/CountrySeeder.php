<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->insert(array(
        [ "name"=>'Afghanistan',"label"=>'AF',"ems_area"=>2,"parcel_area"=>2 ],
		[ "name"=>'Albania',"label"=>'AL' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Algeria',"label"=>'DZ' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Andorra',"label"=>'AD' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Angola',"label"=>'AO' ,"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Antigua and Barbuda',"label"=>'AG',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Argentina',"label"=>'AR' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Armenia',"label"=>'AM' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Australia',"label"=>'AU' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Austria',"label"=>'AT' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Azerbaijan',"label"=>'AZ' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Bahamas',"label"=>'BS' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Bahrain',"label"=>'BH',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Bangladesh',"label"=>'BD',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Barbados',"label"=>'BB',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Belarus',"label"=>'BY',"ems_area"=>3,"parcel_area"=>3  ], 
		[ "name"=>'Belgium',"label"=>'BE' ,"ems_area"=>3,"parcel_area"=>3 ],	
		[ "name"=>'Belize',"label"=>'BZ' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Benin',"label"=>'BJ' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Bermuda',"label"=>'BM' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Bhutan',"label"=>'BT' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Bolivia',"label"=>'BO' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Caribbean Netherlands',"label"=>'BQ',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Bosnia and Herzegovina',"label"=>'BA' "ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Botswana',"label"=>'BW' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Brazil',"label"=>'BR' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Brunei Darussalam',"label"=>'BN',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Bulgaria',"label"=>'BG',"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Burkina Faso',"label"=>'BF' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Burundi',"label"=>'BI' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Cape Verde',"label"=>'CV' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Cambodia',"label"=>'KH',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Cameroon',"label"=>'CM' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Canada',"label"=>'CA',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Cayman Islands',"label"=>'KY' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Central African Republic (the)',"label"=>'CF' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Chad',"label"=>'TD' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Chile',"label"=>'CL' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'China',"label"=>'CN' ,"ems_area"=>1,"parcel_area"=>1 ],
		[ "name"=>'Christmas Island',"label"=>'CX'  ],
		[ "name"=>'Cocos (Keeling) Islands (the)',"label"=>'CC'  ],
		[ "name"=>'Colombia',"label"=>'CO' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Comoros (the)',"label"=>'KM' ,"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Congo',"label"=>'CD' ,"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Congo-Kinshasa',"label"=>'CG' ,"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Cook Islands (the)',"label"=>'CK'  ],
		[ "name"=>'Costa Rica',"label"=>'CR',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Croatia',"label"=>'HR',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Cuba',"label"=>'CU',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Curaçao',"label"=>'CW' ,"ems_area"=>2,"parcel_area"=>3 ], 
		[ "name"=>'Cyprus',"label"=>'CY' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Czechia',"label"=>'CZ' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Cote dIvoire',"label"=>'CI' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Denmark',"label"=>'DK' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Djibouti',"label"=>'DJ' ,"ems_area"=>3,"parcel_area"=>4 ], 
		[ "name"=>'Dominica',"label"=>'DM' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Dominican Republic ',"label"=>'DO',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Ecuador',"label"=>'EC' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Egypt',"label"=>'EG' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'El Salvador',"label"=>'SV',"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Equatorial Guinea',"label"=>'GQ' ,"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Eritrea',"label"=>'ER' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Estonia',"label"=>'EE' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Eswatini',"label"=>'SZ' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Ethiopia',"label"=>'ET' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Falkland Islands ',"label"=>'FK' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Fiji',"label"=>'FJ',"ems_area"=>2,"parcel_area"=>3   ],
		[ "name"=>'Finland',"label"=>'FI' ,"ems_area"=>3,"parcel_area"=>3 ], 
		[ "name"=>'France',"label"=>'FR' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'French Guiana',"label"=>'GF',"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'French Polynesia',"label"=>'PF' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Gabon',"label"=>'GA' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Gambia ',"label"=>'GM'  ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Georgia',"label"=>'GE'  ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Germany',"label"=>'DE' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Ghana',"label"=>'GH' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Gibraltar',"label"=>'GI' "ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Greece',"label"=>'GR' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Greenland',"label"=>'GL'  ],
		[ "name"=>'Grenada',"label"=>'GD' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Guadeloupe',"label"=>'GP' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Guam',"label"=>'GU',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Guatemala',"label"=>'GT' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Guernsey',"label"=>'GG' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Guinea',"label"=>'GN' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Guinea-Bissau',"label"=>'GW' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Guyana',"label"=>'GY' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Haiti',"label"=>'HT' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Honduras',"label"=>'HN' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Hong Kong',"label"=>'HK',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Hungary',"label"=>'HU' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Iceland',"label"=>'IS' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'India',"label"=>'IN',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Indonesia',"label"=>'ID',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Iran',"label"=>'IR' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Iraq',"label"=>'IQ' ,"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Ireland',"label"=>'IE' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Isle of Man',"label"=>'IM'  ],
		[ "name"=>'Israel',"label"=>'IL' ,"ems_area"=>1,"parcel_area"=>3 ],
		[ "name"=>'Italy',"label"=>'IT' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Jamaica',"label"=>'JM',"ems_area"=>4,"parcel_area"=>3  ], 
		[ "name"=>'Japan',"label"=>'JP'  ],
		[ "name"=>'Jersey',"label"=>'JE' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Jordan',"label"=>'JO' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Kazakhstan',"label"=>'KZ' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Kenya',"label"=>'KE' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Kiribati',"label"=>'KI' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Korea North',"label"=>'KP',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Korea South',"label"=>'KR',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Kuwait',"label"=>'KW' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Kyrgyzstan',"label"=>'KG'  ],
		[ "name"=>'Laos',"label"=>'LA' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Latvia',"label"=>'LV' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Lebanon',"label"=>'LB' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Lesotho',"label"=>'LS' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Liberia',"label"=>'LR' ,"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Libya',"label"=>'LY' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Liechtenstein',"label"=>'LI' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Lithuania',"label"=>'LT' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Luxembourg',"label"=>'LU' ,"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Macao',"label"=>'MO',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Madagascar',"label"=>'MG' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Malawi',"label"=>'MW' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Malaysia',"label"=>'MY' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Maldives',"label"=>'MV' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Mali',"label"=>'ML',"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Malta',"label"=>'MT' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Marshall Islands',"label"=>'MH'  ],
		[ "name"=>'Martinique',"label"=>'MQ' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Mauritania',"label"=>'MR'  ],
		[ "name"=>'Mauritius',"label"=>'MU' ,"ems_area"=>3,"parcel_area"=>4  ],
		[ "name"=>'Mayotte',"label"=>'YT'  ],
		[ "name"=>'Mexico',"label"=>'MX',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Micronesia',"label"=>'FM' ,"ems_area"=>1,"parcel_area"=>1 ],
		[ "name"=>'Moldova',"label"=>'MD' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Monaco',"label"=>'MC' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Mongolia',"label"=>'MN' ,"ems_area"=>1,"parcel_area"=>1 ],
		[ "name"=>'Montenegro',"label"=>'ME' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Montserrat',"label"=>'MS' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Morocco',"label"=>'MA' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Mozambique',"label"=>'MZ' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Myanmar',"label"=>'MM',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Namibia',"label"=>'NA' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Nauru',"label"=>'NR',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Nepal',"label"=>'NP' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Netherlands',"label"=>'NL' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'New Caledonia',"label"=>'NC',"ems_area"=>2,"parcel_area"=>3   ],
		[ "name"=>'New Zealand',"label"=>'NZ',"ems_area"=>2,"parcel_area"=>3   ],
		[ "name"=>'Nicaragua',"label"=>'NI',"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Niger',"label"=>'NE' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Nigeria',"label"=>'NG' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Niue',"label"=>'NU'  ],
		[ "name"=>'Norfolk Island',"label"=>'NF'  ],
		[ "name"=>'Northern Mariana Islands (the)',"label"=>'MP'  ],
		[ "name"=>'Norway',"label"=>'NO' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Oman',"label"=>'OM' ,"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Pakistan',"label"=>'PK',"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Palau',"label"=>'PW' ,"ems_area"=>1,"parcel_area"=>1 ],
		[ "name"=>'Palestine',"label"=>'PS' ,"ems_area"=>1,"parcel_area"=>2 ], 
		[ "name"=>'Panama',"label"=>'PA',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Papua New Guinea',"label"=>'PG',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Paraguay',"label"=>'PY' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Peru',"label"=>'PE' ,"ems_area"=>3,"parcel_area"=>4  ],
		[ "name"=>'Philippines',"label"=>'PH' ,"ems_area"=>1,"parcel_area"=>1 ],
		[ "name"=>'Pitcairn',"label"=>'PN' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Poland',"label"=>'PL' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Portugal',"label"=>'PT' ,"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Puerto Rico',"label"=>'PR' ,"ems_area"=>2,"parcel_area"=>3 ], 
		[ "name"=>'Qatar',"label"=>'QA' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'North Macedonia',"label"=>'MK' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Romania',"label"=>'RO' ,"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Russian Federation',"label"=>'RU' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Rwanda',"label"=>'RW' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Réunion',"label"=>'RE',"ems_area"=>4,"parcel_area"=>4  ],
		[ "name"=>'Saint Lucia',"label"=>'LC' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Saint Pierre and Miquelon',"label"=>'PM' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Saint Vincent and the Grenadines',"label"=>'VC' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Samoa',"label"=>'WS' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'San Marino',"label"=>'SM' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Sao Tome and Principe',"label"=>'ST'  ],
		[ "name"=>'Saudi Arabia',"label"=>'SA' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Senegal',"label"=>'SN' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Serbia',"label"=>'RS' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Seychelles',"label"=>'SC' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Sierra Leone',"label"=>'SL' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Singapore',"label"=>'SG',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Slovakia',"label"=>'SK',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Slovenia',"label"=>'SI' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Solomon Islands',"label"=>'SB',"ems_area"=>2,"parcel_area"=>3   ],
		[ "name"=>'Somalia',"label"=>'SO' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'South Africa',"label"=>'ZA' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'South Georgia and the South Sandwich Islands',"label"=>'GS'  ],
		[ "name"=>'Spain',"label"=>'ES' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Sri Lanka',"label"=>'LK',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Sudan',"label"=>'SD' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Suriname',"label"=>'SR' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Sweden',"label"=>'SE' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Switzerland',"label"=>'CH' ,"ems_area"=>2,"parcel_area"=>3 ], 
		[ "name"=>'Syria',"label"=>'SY' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Taiwan',"label"=>'TW',"ems_area"=>1,"parcel_area"=>1  ],
		[ "name"=>'Tajikistan',"label"=>'TJ' ,"ems_area"=>3,"parcel_area"=>3  ],
		[ "name"=>'Tanzania',"label"=>'TZ' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Thailand',"label"=>'TH',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Timor-Leste',"label"=>'TL' ,"ems_area"=>1,"parcel_area"=>2 ],
		[ "name"=>'Togo',"label"=>'TG' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Tonga',"label"=>'TO' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Trinidad and Tobago',"label"=>'TT',"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Tunisia',"label"=>'TN' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Turkey',"label"=>'TR' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Turkmenistan',"label"=>'TM' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Turks and Caicos Islands',"label"=>'TC' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Tuvalu',"label"=>'TV' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Uganda',"label"=>'UG' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Ukraine',"label"=>'UA' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'United Arab Emirates',"label"=>'AE' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'United Kingdom',"label"=>'GB' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'United States of America',"label"=>'US',"ems_area"=>2,"parcel_area"=>3   ],
		[ "name"=>'Uruguay',"label"=>'UY' ,"ems_area"=>3,"parcel_area"=>4 ],
		[ "name"=>'Uzbekistan',"label"=>'UZ' ,"ems_area"=>3,"parcel_area"=>3 ],
		[ "name"=>'Vanuatu',"label"=>'VU' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Venezuela',"label"=>'VE' ,"ems_area"=>3,"parcel_area"=>4  ],
		[ "name"=>'VietNam',"label"=>'VN',"ems_area"=>1,"parcel_area"=>2  ],
		[ "name"=>'Virgin Islands (British)',"label"=>'VG' ,"ems_area"=>2,"parcel_area"=>3  ],
		[ "name"=>'Virgin Islands (U.S.)',"label"=>'VI' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Yemen',"label"=>'YE' ,"ems_area"=>2,"parcel_area"=>3 ],
		[ "name"=>'Zambia',"label"=>'ZM' ,"ems_area"=>4,"parcel_area"=>4 ],
		[ "name"=>'Zimbabwe',"label"=>'ZW' ,"ems_area"=>3,"parcel_area"=>4]
		));
    }
}
