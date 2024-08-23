<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    public function redirect() {

        //Ao abrir o projeto, é levado pra página todos
        return redirect('/todos');

    }

    public function index() {

        //Pega todos os registros do banco de dados
        $todos = Todos::all();

        //Retorna a view "todos" e compacta a variavel todos pra ser interpretada pelo .blade evitando "'id' => $r->id"
        return view('todos.index', compact('todos'));
    }

    public function update(Request $r) {

        //Pega o post
        $todos = $r->post();

        //DB::transaction é um try catch
        DB::transaction(function () use ($todos) {

            //Seta todos os completed pra 0 (os que eram marcados "1" mas foram desmarcados são setados como 0 dessa maneira)
            DB::table('todos')->update(['completed' => '0']);

            //Pra cada um que foi marcado, seta como 1
            foreach($todos['completed'] as $todo) {
                
                Todos::where('id', $todo)->update(['completed' => '1']);
            }
        });

        return redirect(route('todos'));
    }
}
