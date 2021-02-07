<?php

namespace App\Providers;

use App\Services\Validation\IValidationService;
use App\Services\Validation\ValidationService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IValidationService::class, ValidationService::class);
    }

    public function provides()
    {
        return [
            IValidationService::class
        ];
    }
}
