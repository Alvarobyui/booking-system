<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User1;

class UserReservationController extends Controller
{
    public function getUserWithReservations($userId)
    {
        // // Obtén el usuario con sus reservaciones
        // $user = User1::with('reservations')->find($userId);

        // if (!$user) {
        //     return response()->json(['message' => 'Usuario no encontrado'], 404);
        // }

        // // Devuelve el usuario y sus reservaciones en formato JSON
        // return response()->json($user, 200);

        
        // $user = User1::with(['reservations'])->find($userId);
        $user = User1::with('reservations')->find(1);
        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Depurar la salida
        return response()->json([
            'user' => $user,
            'reservations_count' => $user->reservations->count(),
            'reservations' => $user->reservations
        ]);

    }
}