<?php

namespace App\Providers;

use App\Repository\Registration\ClubRegistrationRepository;
use App\Repository\Registration\KISRegistrationRepository;
use App\Repository\Registration\EventOrganizerRegistrationRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return '/home/u1721315/public_html';
        });

        $this->app->singleton(ClubRegistrationRepository::class, function() {
            return new ClubRegistrationRepository(public_path("uploads/"), "registrations/club/");
        });

        $this->app->singleton(KISRegistrationRepository::class, function() {
            return new KISRegistrationRepository(public_path("uploads/"), "registrations/kis/");
        });

        $this->app->singleton(EventOrganizerRegistrationRepository::class, function() {
            return new EventOrganizerRegistrationRepository(public_path("uploads/"), "registrations/eo/");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            return 'Database\\Factories\\'.class_basename($modelName).'Factory';
        });

        Paginator::useBootstrap();

        Carbon::setLocale('id');
    }
}
