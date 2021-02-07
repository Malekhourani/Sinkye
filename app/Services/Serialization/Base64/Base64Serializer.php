<?php 

namespace App\Services\Serialization\Base64;

use App\Services\Serialization\ISerializationService;

class Base64Serializer implements ISerializationService
{
    public function decode($data)
    {
        return base64_decode($data);
    }

    public function encode($data)
    {
        return base64_encode($data);
    }
}
