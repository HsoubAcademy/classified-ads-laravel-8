<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(
            ['lists.categories','partials.categoryNav','partials.searchfrm','ads.edit'],'App\Http\ViewComposers\CategoryComposer'
        );

        view()->composer(
            ['lists.countries','partials.searchfrm','ads.edit'],'App\Http\ViewComposers\CountryComposer'
        );

        view()->composer('lists.currencies','App\Http\ViewComposers\CurrencyComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('App\Http\ViewComposers\CategoryComposer');

        $this->app->singleton('App\Http\ViewComposers\CountryComposer');
    }
}
