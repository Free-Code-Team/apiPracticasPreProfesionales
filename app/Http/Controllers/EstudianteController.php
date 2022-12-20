<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\StoreEstudianteRequest;
use App\Models\Estudiante;

class EstudianteController extends BaseController
{
    public function index()
    {
        $personas = Estudiante::all();

        if (!$personas) {
            $this->sendError('No existen datos', [], 404);
        }

        return $this->sendResponse($personas, 'Listado correcto de personas.');
    }

    public function store(StoreEstudianteRequest $request)
    {
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 200);
    }

    public function update(StoreEstudianteRequest $request, int $id)
    {
        $estudiante=Estudiante::find($id);
        $estudiante->update($request->all());
        if (!$estudiante) {
            return response()->json($estudiante, 404);
        } else {
            return response()->json($estudiante, 200);
        }
    }

    public function obtenerEstudiantePorId(int $idPersona)
    {
        $estudiante = Estudiante::all()->where('idPersona', $idPersona)->first();
        return response()->json($estudiante, 200);
    }
}
