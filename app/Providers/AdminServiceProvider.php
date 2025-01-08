<?php

namespace App\Providers;

use App\services\CourseService;
use App\services\ProfessorService;
use App\services\SemesterService;
use App\services\StudentService;
use App\services\UnitService;
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
        $this->app->bind(CourseService::class,CourseService::class);
        $this->app->bind(SemesterService::class,SemesterService::class);
        $this->app->bind(UnitService::class,UnitService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
