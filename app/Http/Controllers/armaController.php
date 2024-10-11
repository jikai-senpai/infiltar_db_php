<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armas;

class armaController extends Controller
{
    public function index()
    {
        $armas = Armas::all();

        if ($armas->isEmpty()) {
            $data = [
                'mensaje' => 'No se encontraron armas',
                'error' => true
            ];
            return response()->json($data, 404);
        }

        return response()->json($armas, 200);
    }
}
