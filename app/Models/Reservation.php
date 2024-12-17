<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User1;
use App\Models\Tour;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'reservation_id';
    protected $fillable = ['user_id', 'tour_id', 'reservation_date', 'total_cost'];

    //1-n relations (inverse)
    public function user()
    {
        return $this->belongsTo(User1::class, 'user_id', 'reservation_id'); // Relación N-1 con usuarios
    }

    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id', 'reservation_id'); // Relación N-1 con tour
    }

}
