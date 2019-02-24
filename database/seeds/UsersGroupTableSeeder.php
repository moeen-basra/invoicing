<?php

use Illuminate\Database\Seeder;

class UsersGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_group')->insert(
            [
                [
                    'user_id' => 1,
                    'group_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'user_id' => 2,
                    'group_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'user_id' => 3,
                    'group_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
        
    }
}
