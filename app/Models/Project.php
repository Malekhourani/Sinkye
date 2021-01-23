<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public int $project_id;
    public string $name;
    public string $description;

    protected $primaryKey = 'id';
    protected $table = 'project';
    public $timestamps = false;
    protected $fillable = [
        'name', 'description'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
