<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $professores = Professor::all();
        return view("professores.index", compact('professores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("professores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'especialidade' => 'required',
            'email' => 'required|email',
            'telefone' => 'required'
        ]);

        Professor::create($request->all());

        return redirect()->route("professores.index")
            ->with('success', 'Professor cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professor = Professor::findOrFail($id);
        return view("professores.edit", compact("professor"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor = Professor::findOrFail($id);

        $request->validate([
            'nome' => 'required',
            'especialidade' => 'required',
            'email' => 'required|email',
            'telefone' => 'required'
        ]);

        $professor->update($request->all());

        return redirect()->route("professores.index")
            ->with('success', 'Professor atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professor::findOrFail($id);

        $professor->delete();

        return redirect()->route("professores.index")
            ->with('success', 'Professor excluído com sucesso!');
    }
}
















// <!-- <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Professor;

// class ProfessorController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// } -->
