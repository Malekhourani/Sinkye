<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;


class EmployeeTypePermissions extends Pivot
{
    use HasFactory;

    public int $employee_id;
    public int $permission_id;

    protected $table = 'employee_type_permissions';
}
