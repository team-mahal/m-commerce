<?php

namespace Backpack\Settings\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name'          => 'email',
            'value'          => 'text@gmail.com',
        ]);

        DB::table('settings')->insert([
            'name'          => 'email1',
            'value'          => 'tex1t@gmail.com',
        ]);

        DB::table('settings')->insert([
            'name'          => 'address',
            'value'          => 'Address',
        ]);

        DB::table('settings')->insert([
            'name'          => 'phone',
            'value'          => 'Address',
        ]);

        DB::table('settings')->insert([
            'name'          => 'phone1',
            'value'          => 'Address',
        ]);

        DB::table('pages')->insert([
            'name'          => 'Term of Use',
            'content'          => 'Address',
        ]);


        DB::table('pages')->insert([
            'name'          => 'Locations We Ship To',
            'content'          => 'Address',
        ]);


        DB::table('pages')->insert([
            'name'          => 'Estimated Delivery Time',
            'content'          => 'Address',
        ]);

        
        DB::table('pages')->insert([
            'name'          => 'Shipping GuideShipping Guide',
            'content'          => 'Address',
        ]);
    }
}
