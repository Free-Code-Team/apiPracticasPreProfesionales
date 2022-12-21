<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Http\Requests\StorePersonaRequest;
use App\Models\Persona;

class PersonaController extends BaseController
{
    public function index()
    {
        $personas = Persona::all();

        if (!$personas) {
            $this->sendError('No existen datos', [], 404);
        }

        return $this->sendResponse($personas, 'Listado correcto de personas.');
    }

    public function store(StorePersonaRequest $request)
    {
        $persona = Persona::create($request->all());
        return response()->json($persona, 200);
    }

    public function update(StorePersonaRequest $request, int $id)
    {
        $persona=Persona::find($id);
        $persona->update($request->all());
        if (!$persona) {
            return response()->json($persona, 404);
        } else {
            return response()->json($persona, 200);
        }
    }

    public function obtenerPersonaPorUid(string $idUsuario)
    {
        $persona = Persona::all()->where('uidUsuario', $idUsuario)->first();
        return response()->json($persona, 200);
    }

    public function show(int $id)
    {
        $persona = Persona::findOrFail($id);

        if (!$persona) {
            $this->sendError('No existen datos', [], 404);
        }

        return response()->json($persona, 200);
    }
}


