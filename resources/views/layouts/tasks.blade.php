@extends('welcome')
@section('body')
<div class="content mt-5">
    <div class="row">
        <div class="add-task col-md-6">
            {{
                Form::open([
                    'route'=>['task.add'],
                    'method'=>'POST'    
                ])
            }}
                <input type="text" placeholder="Nova tarefa" name="title" class="form-control mb-3">
                <button class="btn btn-primary">Adicionar Tarefa</button>
            {{
                Form::close()
            }}
        </div>
    </div>
    <hr>
    <div class="tasks d-flex flex-wrap">
        @forelse ($tasks as $item)
        @include('layouts.task', ['item'=>$item])  
        @empty
            <h1>Nenhuma tarefa a ser feita</h1>
        @endforelse
    </div>
</div>
@endsection