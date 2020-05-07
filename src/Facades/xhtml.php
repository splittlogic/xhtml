<?php

namespace splittlogic\xhtml\Facades;

use Illuminate\Support\Facades\Facade;

class xhtml extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xhtml';
    }
}
