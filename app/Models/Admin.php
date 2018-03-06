<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable;
    protected $table = 'admins';
    protected $fillable = ['adname', 'adphone', 'adpasswd'];
    protected $hidden = ['adpasswd', 'remember_token'];
}
