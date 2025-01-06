<?php

namespace App\Providers;

use App\services\ProfessorService;
use App\services\StudentService;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(StudentService::class,StudentService::class);
        $this->app->bind(ProfessorService::class,ProfessorService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
