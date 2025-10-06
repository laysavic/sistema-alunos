<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $alunos = Aluno::all();
        return view("alunos.index", compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alunos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|numeric|unique:alunos,matricula',
            'curso' => 'required|string|max:100',
            'idade' => 'required|integer|min:1|max:120',
        // 'nome' => 'required',
        // 'matricula' => 'required',
        // 'curso' => 'required',
        // 'idade' => 'required|integer',
    ]);
    
        Aluno::create($request->all());

        return redirect()->route("alunos.index")->with('success', 'Aluno cadastrado com sucesso!');

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
        $aluno = Aluno::findOrFail($id);
        return view("alunos.edit", compact("aluno"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'matricula' => 'required|numeric|unique:alunos,matricula,' . $id,
            'curso' => 'required|string|max:100',
            'idade' => 'required|integer|min:1|max:120',
        ]);

        $aluno = Aluno::findOrfail($id);

        $aluno->update($request->all());

        return redirect()->route("alunos.index")->with('success', 'Aluno atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::FindOrFail($id);

        $aluno->delete();

        return redirect()->route("alunos.index")->with('success', 'Aluno excluído com sucesso!');
    }
}
