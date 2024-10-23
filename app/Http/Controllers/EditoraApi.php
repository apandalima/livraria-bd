<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class EditoraApi extends Controller
{
    // Listar todas as editoras
    public function index()
    {
        try {
            return Editora::all();
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Exibir uma editora específica
    public function show($id)
    {
        try {
            return Editora::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Editora não encontrada!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Criar uma nova editora
    public function store(Request $request)
    {
        try {
            $editora = Editora::create($request->all());
            return response()->json($editora, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Atualizar uma editora existente
    public function update(Request $request, $id)
    {
        try {
            $editora = Editora::findOrFail($id);
            $editora->update($request->all());
            return response()->json($editora, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Editora não encontrada!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Deletar uma editora
    public function destroy($id)
    {
        try {
            Editora::findOrFail($id)->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Editora não encontrada!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }
}
