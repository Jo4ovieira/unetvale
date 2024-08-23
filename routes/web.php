<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

//Redirecionamento para '/todos'
Route::get('/', [TodosController::class, 'redirect'])->name('redirect');
//Rota '/todos'
Route::get('/todos', [TodosController::class, 'index'])->name('todos');
//Rota de Post
Route::post('/todos/completed', [TodosController::class, 'update'])->name('todos.update');

//!!! Todas foram nomeadas para melhor organização e melhor uso do route !!!
