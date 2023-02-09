<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function sendResponse($resultado, $mensaje)
    {
        $res = [
            'estado' => 'correcto',
            'data' => $resultado,
            'mensaje' => $mensaje,
        ];

        return response()->json($res, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $res = [
            'estado' => 'incorrecto',
            'mensaje' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($res, $code);
    }
}