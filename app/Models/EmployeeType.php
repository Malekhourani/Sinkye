<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    use HasFactory;

    public int $employee_type_id;
    public string $name;
    public string $description;
    
    
    protected $table = 'employee_type';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'name', 'description'
    ];
    

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'Employee_Permissions')
                    ->using(EmployeeTypePermissions::class);
    }
}
