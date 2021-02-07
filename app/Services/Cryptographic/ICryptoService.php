<?php 

namespace App\Services\Cryptographic;

interface ICryptoService
{
    public function encrypt($data);

    public function decrypt($data);
}
