<?php

namespace Itadventure\Datetime;

use Illuminate\Support\ServiceProvider;

class DateTimeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Itadventure\Datetime\DateTime');
    }
}
