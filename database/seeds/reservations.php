<?php

use Illuminate\Database\Seeder;

class reservations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$res =[[
            'status' => 'confirmed',
            'created_at' => now(),

        ],[
            'status' => 'confirmed',
            'created_at' => now(),

        ],[
            'status' => 'confirmed',
            'created_at' => now(),

        ],[
            'status' => 'unconfirmed',
            'created_at' => now(),

        ],[
            'status' => 'unconfirmed',
            'created_at' => now(),

        ],[
            'status' => 'unconfirmed',
            'created_at' => now(),

        ]];

        DB::table('reservations')->insert($res);
    }
}
