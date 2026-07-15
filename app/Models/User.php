<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

#[Fillable(['name', 'email', 'nim', 'password', 'photo'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
=======
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'password',
    ];
>>>>>>> 859ecd8ec40f3060048a67adcfc92292e548cfc2

    protected $hidden = [
        'password',
    ];
}