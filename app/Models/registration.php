<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class registration extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'password',
        'email',
        'date',
        'password_confirmation'
    ];
}
