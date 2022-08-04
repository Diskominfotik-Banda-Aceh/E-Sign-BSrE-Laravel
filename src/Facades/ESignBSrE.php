<?php

namespace DiskominfotikBandaAceh\ESignBSrE\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method \DiskominfotikBandaAceh\ESignBSrE\ESignBSrE sign()
 *
 * @see \DiskominfotikBandaAceh\ESignBSrE\ESignBSrE
 */
class ESignBSrE extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'e-sign-bsre';
    }
}
