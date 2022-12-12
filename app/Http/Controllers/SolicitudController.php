<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSolicitudRequest;
use App\Models\Solicitud;
use App\Http\Controllers\BaseController as BaseController;

class SolicitudController extends BaseController
{
    public function index()
    {
        $solicitudes = Solicitud::all();

        if (!$solicitudes) {
            $this->sendError('No existen datos', [], 404);
        }

        return $this->sendResponse($solicitudes, 'Listado correcto de solicitudes.');
    }

    public function store(StoreSolicitudRequest $request)
    {
        $solicitud = Solicitud::create($request->all());

        return $this->sendResponse($solicitud, 'Se creó correctamente la solicitud.');
    }

    public function update(StoreSolicitudRequest $request, Solicitud $post)
    {
        $post->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'post' => $post
        ], 200);
    }

    public function destroy(Solicitud $post)
    {
        $post->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
