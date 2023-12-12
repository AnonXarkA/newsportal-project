<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
=======
>>>>>>> origin/feature-branch
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        Paginator::useBootstrap();

        $setting = Setting::pluck('value', 'key')->toArray();

        View::composer('*', function($view) use ($setting){
            $view->with('settings', $setting);
        });
=======
        //
>>>>>>> origin/feature-branch
    }
}
