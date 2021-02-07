<?php

namespace App\Providers;

use App\Repository\Company\CompanyRepository;
use App\Repository\Company\ICompanyRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
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
        $this->app->bind(ICompanyRepository::class, CompanyRepository::class);
    }

    public function provides()
    {
        return [ICompanyRepository::class];
    }
}
