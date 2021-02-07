<?php 

namespace App\Services\Token;

use App\Services\Cryptographic\ICryptoService;
use App\Services\Serialization\ISerializationService;

interface ITokenService extends ISerializationService, ICryptoService
{
    public function createToken(int $length) : string;
}