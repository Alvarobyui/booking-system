<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;


class ReservationController extends Controller
{
    public function index() 
    {
        $reservations = Reservation::all();

        $data = [
            'reservations' => $reservations,
            'status' => 200
        ];
        return response()->json($data, 200);
    }

}
