<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public int $employee_id;
    public string $name;

    protected $table = 'employee';

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function employee_type()
    {
        return $this->belongsTo(EmployeeType::class);
    }

    public function Groups()
    {
        return $this->belongsToMany(Group::class, 'participants')
                    ->using(Participants::class)
                    ->as('participants');
    }
}
