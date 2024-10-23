<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use App\Models\Editora;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class LivroApi extends Controller
{
    // Listar todos os livros
    public function index()
    {
        try {
            return Livro::all();
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Exibir um livro específico
    public function show($id)
    {
        try {
            return Livro::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Livro não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Criar um novo livro
    public function store(Request $request)
    {
        try {
            // Validação da requisição
            $validatedData = $request->validate([
                'titulo' => 'required|string|max:255',
                'isbn' => 'required|string|max:255|unique:livros',
                'sinopse' => 'nullable|string',
                'preco' => 'required|numeric',
                'autor_nome' => 'required|string|exists:autor,nome',
                'editora_nome' => 'required|string|exists:editora,nome_editora',
            ]);

            // Buscar autor e editora pelo nome
            $autor = Autor::where('nome', $validatedData['autor_nome'])->first();
            $editora = Editora::where('nome_editora', $validatedData['editora_nome'])->first();

            if (!$autor || !$editora) {
                return response()->json(['message' => 'Autor ou Editora não encontrados!'], 404);
            }

            // Criação do livro
            $livro = Livro::create([
                'titulo' => $validatedData['titulo'],
                'isbn' => $validatedData['isbn'],
                'sinopse' => $validatedData['sinopse'],
                'preco' => $validatedData['preco'],
                'autor_id' => $autor->id,
                'editora_id' => $editora->id,
            ]);

            return response()->json($livro, 201);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Atualizar um livro existente
    public function update(Request $request, $id)
    {
        try {
            // Validação da requisição
            $validatedData = $request->validate([
                'titulo' => 'sometimes|required|string|max:255',
                'isbn' => 'sometimes|required|string|max:255|unique:livros,isbn,' . $id,
                'sinopse' => 'nullable|string',
                'preco' => 'sometimes|required|numeric',
                'autor_nome' => 'sometimes|required|string|exists:autor,nome',
                'editora_nome' => 'sometimes|required|string|exists:editora,nome_editora',
            ]);

            // Buscar autor e editora pelo nome
            $autor = Autor::where('nome', $validatedData['autor_nome'])->first();
            $editora = Editora::where('nome_editora', $validatedData['editora_nome'])->first();

            if (!$autor || !$editora) {
                return response()->json(['message' => 'Autor ou Editora não encontrados!'], 404);
            }

            // Atualização do livro
            $livro = Livro::findOrFail($id);
            $livro->update([
                'titulo' => $validatedData['titulo'] ?? $livro->titulo,
                'isbn' => $validatedData['isbn'] ?? $livro->isbn,
                'sinopse' => $validatedData['sinopse'] ?? $livro->sinopse,
                'preco' => $validatedData['preco'] ?? $livro->preco,
                'autor_id' => $autor->id,
                'editora_id' => $editora->id,
            ]);

            return response()->json($livro, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Livro não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }

    // Deletar um livro
    public function destroy($id)
    {
        try {
            Livro::findOrFail($id)->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Livro não encontrado!'], 404);
        } catch (Exception $e) {
            return response()->json(['message' => 'Algo de errado aconteceu!'], 500);
        }
    }
}
