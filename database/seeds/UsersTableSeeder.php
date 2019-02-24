<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Data\Models\User::create([
            'name' => 'Moeen Basra',
            'email' => 'm.basra@live.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);

        $users = factory(\App\Data\Models\User::class, 50)->create();

        $chunks = $users->chunk($users->count() / 2);

        $properties = null;

        foreach ($chunks as $key => $chunk) {
            foreach ($chunk as $user) {
                if ($key === 0) {
                    $user->properties()->save(factory(\App\Data\Models\Property::class)->make());
                } else {
                    $property_ids = \App\Data\Models\Lease::select('property_id')->pluck('property_id');
                    $property = \App\Data\Models\Property::whereNotIn('id', $property_ids)
                        ->first();

                    /** @var \App\Data\Models\Lease $lease */
                    $lease = factory(\App\Data\Models\Lease::class)->make();

                    $lease->property()->associate($property);

                    $user->leases()->save($lease);
                }
            }
        }
    }
}
