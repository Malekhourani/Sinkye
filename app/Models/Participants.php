<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Participants extends Pivot
{
    use HasFactory;

    public int $employee_id;
    public int $group_id;

    protected $table = 'participants';
}
