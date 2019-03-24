<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Repositories
        $this->app->bind(
            'App\Repositories\Group\GroupRepositoryInterface',
            'App\Repositories\Group\GroupRepository'
        );

        // Services
        $this->app->bind(
            'App\Services\User\UserServiceInterface',
            'App\Services\User\UserService'
        );

        $this->app->bind(
            'App\Repositories\User\UserRepositoryInterface',
            'App\Repositories\User\UserRepository'
        );
    }
}
