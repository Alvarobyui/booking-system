<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';
    protected $primaryKey = 'tour_id';

    protected $fillable = ['name', 'group_or_private', 'hotel_category', 'tour_type', 'cost_per_person'];

    public function reservation() {
        return $this->hasMany(Reservation::class, 'reservation_id', 'tour_id');
    } 

}
