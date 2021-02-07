<?php

namespace App\Providers;

use App\HelperTools\StringHelper;
use App\Models\Company;
use App\Repository\CompanyRepository;
use App\Repository\IRepository;
use App\Repository\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
