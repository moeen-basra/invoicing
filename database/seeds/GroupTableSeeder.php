<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(
            [
                [
                    'name' => "admin",
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [ 
                    'name' => "landlord",
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [ 
                    'name' => "tenant",
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
