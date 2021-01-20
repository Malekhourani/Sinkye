<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public int $group_id;
    public string $name;
    public string $description;

    protected $table = 'group';

    public function group_type()
    {
        return $this->belongsTo(GroupType::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function mission()
    {
        return $this->hasOne(Mission::class);
    }

    public function messages()
    {
        return $this->belongsToMany(Message::class, 'group_messages')
                    ->using(GroupMessages::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'participants')
                    ->using(Participants::class)
                    ->as('participants');
    }
}
