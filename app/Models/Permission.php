<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public int $permission_id;
    public string $name;
    public string $description;

    protected $primaryKey = 'id';
    protected $table = 'permission';
    public $timestamps = false;
    protected $fillable = [
        'name', 'description'
    ];

    public function employeeTypes()
    {
        return $this->belongsToMany(EmployeeType::class, 'Employee_Permissions')
                    ->using(EmployeeTypePermissions::class);
    }
}
