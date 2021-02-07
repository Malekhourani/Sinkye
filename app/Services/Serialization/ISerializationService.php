<?php 

namespace App\Services\Serialization;

interface ISerializationService
{
    public function decode($data);

    public function encode($data);
}