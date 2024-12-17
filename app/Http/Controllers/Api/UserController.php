<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User1;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index() 
    {
        $users = User1::all();

        $data = [
            'users' => $users,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
    
    public function store(Request $request)
    {
        $validator = Validator:: make($request->all(), [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'country' => 'required',
            'passport_or_id_type' => 'required',
            'passport_or_id_number' => 'required',
            'gender' => 'required',
            'meals' => 'required'
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $user = User1::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'passport_or_id_type' => $request->passport_or_id_type,
            'passport_or_id_number' => $request->passport_or_id_number,
            'gender' => $request->gender,
            'meals' => $request->meals,
        ]);

        if(!$user) {
            $data = [
                'message' => 'Error al crear el estudiante',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'user' => $user,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $user = User1::find($id);

        if (!$user) {
            $data = [
                'message' => 'Estudiante no encontrado',
                'status' => 400
            ];
            return response()->json($data, 404);
        }

        $data = [
            'user' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}

