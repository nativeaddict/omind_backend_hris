<?php

namespace App\Providers;

use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($admin){

            $user = Auth::guard('admin')->user();

            $admin->with(['admin' => $user]);
        });

        view()->composer('layouts.header', function($admin){

            $user = Auth::guard('admin')->user();

            $admin->with(['admin' => $user]);
        });
    }
}
