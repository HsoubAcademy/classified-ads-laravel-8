<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => "دولار",
            'symbol' => "$"
        ]);
        DB::table('currencies')->insert([
            'name' => "ريال",
            'symbol' => "SAR"
        ]);
        DB::table('currencies')->insert([
            'name' => "درهم ",
            'symbol' => "AED"
        ]);
        DB::table('currencies')->insert([
            'name' => "جنيه",
            'symbol' => "EGP"
        ]);
        DB::table('currencies')->insert([
            'name' => "دينار",
            'symbol' => "KWD"
        ]);
        DB::table('currencies')->insert([
            'name' => "ليرة",
            'symbol' => "SYP"
        ]);
    }
}
