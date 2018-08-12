# ViewProvider.php
Named after the paint you&#039;d see marking a trail!


## Source:
```
<?php
/**
 * Named after the paint you'd see marking a trail!
 */
namespace DiamondLaravelHelpers\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use DiamondLaravelHelpers\Handlers\View;

/**
 * Registers our View handler as a service.
 * @see  DiamondLaravelHelpers\Handlers\View  contains all of the functions that we'll get with this service.
 */
class ViewProvider extends ServiceProvider
{

    /**
     * Tells laravel to load this only when we need it.
     * @var boolean
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('view.helpers', function ($app) {
            return new View();
        });
    }

    /**
     * register our defered provider name
     * @return array
     */
    public function provides()
    {
        return ['view.helpers'];
    }
}

```

___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___
