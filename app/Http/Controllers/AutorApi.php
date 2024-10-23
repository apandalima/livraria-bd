<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class AutorApi extends Controller
{
    // Listar todos os autores
    public function index()
    {
        try {
            return Autor::all();
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Exibir um autor específico
    public function show($id)
    {
        try {
            return Autor::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Autor não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Criar um novo autor
    public function store(Request $request)
    {
        try {
            $autor = Autor::create($request->all());
            return response()->json($autor, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Atualizar um autor existente
    public function update(Request $request, $id)
    {
        try {
            $autor = Autor::findOrFail($id);
            $autor->update($request->all());
            return response()->json($autor, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Autor não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Deletar um autor
    public function destroy($id)
    {
        try {
            Autor::findOrFail($id)->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Autor não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }
}
