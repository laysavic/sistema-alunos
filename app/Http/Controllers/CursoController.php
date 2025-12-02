<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'duracao' => 'nullable|string|max:100',
        ]);

        Curso::create($request->only(['nome','descricao','duracao']));

        return redirect()->route('cursos.index')->with('success', 'Curso criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        //  $curso = Curso::findOrFail($id);
         return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'duracao' => 'nullable|string|max:100',
    ]);

    // BUSCAR O CURSO
    $curso = Curso::findOrFail($id);

    // ATUALIZAR
    $curso->update($request->only(['nome', 'descricao', 'duracao']));

    return redirect()
        ->route('cursos.index')
        ->with('success', 'Curso atualizado com sucesso!');
}

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $curso = Curso::findOrFail($id); // Buscar o curso pelo ID

        $curso->delete(); // Agora sim pode deletar

        return redirect()
            ->route('cursos.index')
            ->with('success', 'Curso excluído com sucesso!');
    }
}
