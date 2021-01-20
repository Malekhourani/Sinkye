<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\Pivot;

class GroupMessages extends Pivot
{
    use HasFactory;

    public int $group_id;
    public int $message_id;

    protected $table = 'group_messages';
}
