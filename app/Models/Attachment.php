<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public int $attachment_id;
    public string $name;
    public string $path;

    protected $table = 'attachment';
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
