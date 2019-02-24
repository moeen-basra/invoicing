<?php

namespace App\Providers;

use App\Data\Models\Lease;
use App\Data\Models\Property;
use App\Data\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Relation::morphMap([
            'user' => User::class,
            'lease' => Lease::class,
            'property' => Property::class,
        ]);
    }
}
