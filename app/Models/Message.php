<?php

namespace App\Models;

use DateTime;
use Egulias\EmailValidator\Warning\EmailTooLong;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public int $message_id;
    public string $content;

    protected $primaryKey = 'id';
    protected $table = 'message';
    public $timestamps = false;
    protected $fillable = [
        'content'
    ];
    
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function attachments()
    {
        return $this->belongsTo(Attachment::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_messages')
                    ->using(GroupMessages::class);
    }
}
