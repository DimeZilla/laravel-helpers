<?php

namespace DiamondLaravelHelpers\Facades;

use Illuminate\Support\Facades\Facade;

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
