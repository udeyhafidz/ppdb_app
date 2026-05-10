<?php

namespace App\Providers;

use App\Models\Sekolah;
use Illuminate\Support\Facades\View;
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
        $sekolah = Sekolah::first();

        View::share('sekolah', $sekolah);
    }
}
