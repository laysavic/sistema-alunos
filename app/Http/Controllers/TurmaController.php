<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;
use App\Models\Disciplina;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::with(['curso', 'disciplina'])->get();
        return view('turmas.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        return view('turmas.create', compact('cursos', 'disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'semestre' => 'required',
            'curso_id' => 'required',
            'disciplina_id' => 'required'
        ]);

        Turma::create($request->all());
        return redirect()->route('turmas.index')->with('success', 'Turma criada com sucesso!');
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
    public function edit(string $id)
    {
        $cursos = Curso::all();
        $disciplinas = Disciplina::all();
        return view('turmas.edit', compact('turma', 'cursos', 'disciplinas'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Turma $turma)
    {
            $request->validate([
            'nome' => 'required',
            'semestre' => 'required',
            'curso_id' => 'required',
            'disciplinas_id' => 'required'
        ]);

        $turma->update($request->all());
        return redirect()->route('turmas.index')->with('success', 'Turma atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turma $turma)
    {
        $turma->delete();
        return redirect()->route('turmas.index')->with('success', 'Turma removida com sucesso!');
    }
}
