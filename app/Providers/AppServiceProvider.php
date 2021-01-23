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
        $this->app->bind(IRepository::class, function(){
            $type = StringHelper::getModelName(request()->url());
            return new Repository($type);
        });
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
