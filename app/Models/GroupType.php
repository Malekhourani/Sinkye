<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupType extends Model
{
    use HasFactory;

    public int $group_type_id;
    public string $name;
    public string $description;

    protected $primaryKey = 'id';
    protected $table = 'group_type';
    public $timestamps = false;
    protected $fillable = [
        'name', 'description'
    ];

    public function group()
    {
        return $this->hasOne(Group::class);
    }
}
