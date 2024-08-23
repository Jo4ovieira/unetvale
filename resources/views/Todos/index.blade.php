@extends('components.layout')

@section('content')
    <div class="container">
        @if($todos == null) {
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h3>Parece que você ainda não semeou o banco de dados</h3>
            </div>
        }
        @endif
        <form method="POST" action="{{route('todos.update')}}">
            
            {{--Validação de segurança de envio de form do Laravel--}}
            @csrf

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center title">
                    <h2>Todos</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th class="text-center completed-fix" scope="col">Completed</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $todo)
                                <tr>
                                    <th scope="row">{{$todo->id}}</th>
                                    <td>{{$todo->name}}</td>
                                    <td class="text-center"><input type="checkbox" name="completed[]" value="{{$todo->id}}" {{$todo->completed == 1 ? "checked" : ""}}></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                    <button title="update" class="btn btn-success submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
