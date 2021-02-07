<?php 

namespace App\Services\Serialization\Json;

use App\Services\Serialization\ISerializationService;

class JsonSerializer implements ISerializationService
{
    public function decode($data)
    {
        return json_decode($data);
    }

    public function encode($data)
    {
        return json_encode($data);
    }
}
