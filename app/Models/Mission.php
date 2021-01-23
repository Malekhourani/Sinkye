<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Mission extends Model
{
    use HasFactory;

    public int $mission_id;
    public string $description;
    public DateTime $deadline;

    protected $primaryKey = 'id';
    protected $table = 'mission';
    public $timestamps = false;
    protected $fillable = [
        'deadline', 'description'
    ];
    
    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }   
}
