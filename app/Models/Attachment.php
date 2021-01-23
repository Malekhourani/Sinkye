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

    public $timestamps = false;
    protected $table = 'attachment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'path'
    ];
    
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
