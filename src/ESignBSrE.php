<?php

namespace DiskominfotikBandaAceh\ESignBSrE;

use Illuminate\Support\Facades\Http;

class ESignBSrE
{
    private $http;
    private $url;
    private $nik;

    public function __construct($username=null, $password=null, $nik=null){
        if (!$username)
            $username = config('e-sign-bsre.username');

        if (!$password)
            $password = config('e-sign-bsre.password');

        if ($nik)
            $this->nik = $nik;

        $this->url = config('e-sign-bsre.url');
        $this->http = Http::withBasicAuth($username, $password);
    }

    public function setNIK($nik): ESignBSrE {
        $this->nik = $nik;

        return $this;
    }

    public function signInvisible($nik, $passphrase, $file, $fileName) {
        $response = $this->http->attach(
            'file',
            $file,
            $fileName)
            ->post($this->url . 'api/sign/pdf', [
                'nik' => $nik,
                'passphrase' => $passphrase,
                'tampilan' => 'invisible',
            ]);

        return new ESignBSreResponse($response);
    }

    public function signVerification($file, $fileName){
        $response = $this->http->attach(
            'signed_file',
            $file,
            $fileName)
            ->post($this->url . 'api/sign/verify');

        return new ESignBSreResponse($response);
    }
}
