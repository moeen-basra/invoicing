<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            [
                'name' => 'tenancy',
                'label' => 'Tenancy',
                'type' => 'invoice',
                'sort' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'unit',
                'label' => 'Unit',
                'type' => 'invoice',
                'sort' => 2,
                'created_at' => now(),
                    'updated_at' => now()
            ],
            [
                'name' => 'custom',
                'label' => 'Custom',
                'type' => 'invoice',
                'sort' => 3,
                'created_at' => now(),
                    'updated_at' => now()
            ]
        ]);
    }
}
