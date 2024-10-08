<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        User::observe(UserObserver::class);
    }


    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}
