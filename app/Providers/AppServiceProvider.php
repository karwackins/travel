<?php

namespace App\Providers;

use App\Travel\Interfaces\FrontendRepositoryInterface;
use App\Travel\Repositories\FrontendRepository;
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
        $this->app->bind(FrontendRepositoryInterface::class, function(){
            return new FrontendRepository;
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
