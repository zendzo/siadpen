<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Role;
use App\Gender;
use App\MenuCategory;
use App\Tingkat;
use App\Kelas;
use App\Ruang;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->runningInConsole()) {

            view()->share('roles', Role::all());
            view()->share('tingkat', Tingkat::all());
            view()->share('kelas', Kelas::all());
            view()->share('ruang', Ruang::all());
            view()->share('genders', Gender::all());

        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
