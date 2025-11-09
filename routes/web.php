<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');


});

// Route::get( '/alunos',[AlunoController::class, 'index'])->name('alunos.index');
// Route::get( '/alunos/create',[AlunoController::class, 'create'])->name('alunos.create');
// Route::post( '/alunos',[AlunoController::class, 'store'])->name('alunos.store');
// Route::get( '/alunos/{aluno}/edit',[AlunoController::class, 'edit'])->name('alunos.edit');
// Route::put( '/alunos/{aluno}/edit',[AlunoController::class, 'update'])->name('alunos.update');
// Route::delete( '/alunos/{aluno}/edit',[AlunoController::class, 'destroy'])->name('alunos.destroy');

Route::resource("/alunos", AlunoController::class);
Route::resource("/cursos", CursoController::class);
Route::resource("/professores", ProfessorController::class);
Route::resource("/disciplinas", DisciplinaController::class);
Route::resource("/turmas", TurmaController::class);
