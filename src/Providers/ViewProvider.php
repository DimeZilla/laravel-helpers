<?php
/**
 * Named after the paint you'd see marking a trail!
 */
namespace DiamondLaravelHelpers\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use DiamondLaravelHelpers\Handlers\View;

class ViewProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('ViewHelper', function ($app) {
            return new View();
        });
    }
}
