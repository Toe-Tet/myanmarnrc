<?php

namespace Toetet\MyanmarNrc\Facades;

use Illuminate\Support\Facades\Facade;

class Nrc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myanmarnrc';
    }
}