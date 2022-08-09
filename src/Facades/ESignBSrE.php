<?php

namespace DiskominfotikBandaAceh\ESignBSrE\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \DiskominfotikBandaAceh\ESignBSrE\ESignBSreResponse signInvisible($nik, $passphrase, $file, $fileName)
 * @method static \DiskominfotikBandaAceh\ESignBSrE\ESignBSreResponse signVerification($file, $fileName)
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
