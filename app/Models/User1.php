<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;
use App\Models\Companion;

class User1 extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';


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

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'reservation_id', 'user_id'); // Relación 1-N con reservas
    }

    public function companions()
    {
        return $this->hasMany(Companion::class, 'companion_id');
    }
}
