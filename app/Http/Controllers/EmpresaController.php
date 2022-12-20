<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;

class EmpresaController extends BaseController
{
    //php artisan make:request StoreEmpresaRequest
    public function index()
    {
        $solicitudes = Empresa::all();

        if (!$solicitudes) {
            $this->sendError('No existen datos', [], 404);
        }

        return $this->sendResponse($solicitudes, 'Listado correcto de solicitudes.');
    }

    public function store(StoreEmpresaRequest $request)
    {
        $empresa = Empresa::create($request->all());

        if (!$empresa) {
            return response()->json($empresa, 404);
        } else {
            return response()->json($empresa, 200);
        }
    }

    public function update(StoreEmpresaRequest $request, int $id)
    {
        $empresa = Empresa::find($id);
        $empresa->update($request->all());
        if (!$empresa) {
            return response()->json($empresa, 404);
        } else {
            return response()->json($empresa, 200);
        }
    }

    public function show(int $id)
    {
        $empresa = Empresa::findOrFail($id);

        if (!$empresa) {
            return response()->json($empresa, 404);
        } else {
            return response()->json($empresa, 200);
        }
    }

    public function destroy(Empresa $empresa)
    {
        $estado = $empresa->delete();

        if (!$estado) {
            return response()->json($estado, 404);
        } else {
            return response()->json($estado, 200);
        }
    }
}
