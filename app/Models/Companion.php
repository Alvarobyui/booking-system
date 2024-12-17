<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User1;

class Companion extends Model
{
    use HasFactory;

    protected $table = 'companions';
    protected $primaryKey = 'companion_id';

    protected $fillable = [       
        'name',
        'lastname',
        'email',
        'passport_or_id_type',
        'passport_or_id_number',
        'gender',
        'meals'
    ];

    public function user() {
        return $this->hasOne(User1::class, 'user_id', 'companion_id');
    }
}
