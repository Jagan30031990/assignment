<?php

namespace App\Providers;
use Auth;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        view()->composer(['views.layout.header'], function ($view) {
            $id = Auth::user()->id;
            $user_data = App\Models\User::where('id',$id)->first();
            $view->with('user_data', $user_data);
        });
    }
}
