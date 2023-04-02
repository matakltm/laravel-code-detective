<?php

namespace Matakltm\CodeDetective\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Matakltm\CodeDetective\CodeDetective
 */
class CodeDetective extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Matakltm\CodeDetective\CodeDetective::class;
    }
}
