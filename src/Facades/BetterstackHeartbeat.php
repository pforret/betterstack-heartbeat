<?php

namespace Pforret\BetterstackHeartbeat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pforret\BetterstackHeartbeat\BetterstackHeartbeat
 */
class BetterstackHeartbeat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pforret\BetterstackHeartbeat\BetterstackHeartbeat::class;
    }
}
