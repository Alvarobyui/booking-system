<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [       
        'name',
        'lastname',
        'email',
        'phone_number',
        'country',
        'passport_or_id_type',
        'passport_or_id_number',
        'gender',
        'meals'
    ];
}
