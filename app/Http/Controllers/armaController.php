<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armas;
use Illuminate\Support\Facades\Validator;

class armaController extends Controller
{
    public function index()
    {
        $armas = Armas::all();

        $data = [
            'armas' => $armas,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipo' => 'required|max:255',
            'modelo' => 'required|max:255',
            'condicion' => 'required',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Datos incorrectos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        try {
            Armas::create([
                'tipo' => $request->tipo,
                'modelo' => $request->modelo,
                'condicion' => $request->condicion,
            ]);

            $data = [
                'message' => 'Arma creada correctamente',
                'status' => 201
            ];

            return response()->json($data, 201);

        } catch (\Exception $e) {
            $data = [
                'message' => 'Error al crear el arma',
                'errors' => $e->getMessage(),
                'status' => 500
            ];
            return response()->json($data, 500);
        }
    }
}
