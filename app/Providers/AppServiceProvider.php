<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Auth;
use DB;


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
        //
        View::share('key', 'value');
        Schema::defaultStringLength(191);

        $recipes=DB::table('recipes')->get();
        View::share('recipes',$recipes);


        //View::composer('*', 'App\Http\ViewComposers\SomeComposer');
    }
}
