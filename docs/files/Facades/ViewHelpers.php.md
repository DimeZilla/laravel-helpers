# ViewHelpers.php
Our Facade for the view helpers


## Source:
```
<?php
/**
 * Our Facade for the view helpers
 */
namespace DiamondLaravelHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Extends the facade class from laravel so that our View helpers can be called
 * statically.
 */
class ViewHelpers extends Facade
{
    /**
     * Get the registered name of the role Facade
     *
     * @return  string
     */
    protected static function getFacadeAccessor()
    {
        return 'view.helpers';
    }
}

```

___
Documentation was generated from source code comments on 2018-08-12 using [phpDocumentor](http://www.phpdoc.org/) and [dimezilla/php-doc-markdown](https://github.com/dimezilla/php-doc-markdown)
___
