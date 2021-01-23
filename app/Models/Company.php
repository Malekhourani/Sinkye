<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public int $company_id;
    public string $name;
    public string $description;
    public DateTime $founded;

    public $timestamps = false;
    protected $table = 'company';
    // protected $primaryKey = 'company_id';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'description', 'founded'
    ];

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_id');
    }
}
