<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CampusConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus_configs')->insert([
            'location' => 'João Pessoa',
            'initials' => 'JPA',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}