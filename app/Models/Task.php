<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'name', 'subject', 'deadline_date', 'status'])]
class Task extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
