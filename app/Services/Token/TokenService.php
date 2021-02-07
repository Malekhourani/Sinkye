<?php

namespace App\Services\Token;

use App\HelperTools\StringHelper;
use App\Services\Cryptographic\ICryptoService;
use App\Services\Serialization\ISerializationService;

class TokenService implements ITokenService
{
    private ICryptoService $cryptoService;
    private ISerializationService $serializeService;

    public function __construct(
        ISerializationService $serializeService
        // StringHelper $helper
        // ICryptoService $cryptoService
    ) {
        // $this->helper = $helper;
        // $this->cryptoService = $cryptoService;
        $this->serializeService = $serializeService;
    }

    public function createToken(int $length): string
    {
        return "";
        // return $this->helper->generateRandomString($length);
    }

    public function decode($data)
    {
        return $this->serializeService->decode($data);
    }

    public function encode($data)
    {
        return $this->serializeService->encode($data);
    }

    public function encrypt($data)
    {
        return $this->cryptoService->encrypt($data);
    }

    public function decrypt($data)
    {
        return $this->cryptoService->decrypt($data);
    }
}
