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

    protected $table = 'group_type';

    public function group()
    {
        return $this->hasOne(Group::class);
    }
}
