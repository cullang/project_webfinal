<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'name', 'day', 'start_time', 'end_time', 'type', 'room', 'lecturer', 'notes'])]
class Schedule extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
