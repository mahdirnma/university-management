<?php

namespace App\Providers;

use App\services\MasterService;
use Illuminate\Support\ServiceProvider;

class ProfessorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MasterService::class,MasterService::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
