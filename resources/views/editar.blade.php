@extends('welcome')
@section('body')
<div class="editar-task mt-5">
    <h3>Editar tarefa: {{$task->title}}</h3>
    <div class="col-md-6">
        {{
            Form::open([
                'route'=>['edit.save', $task->id],
                'method'=>'POST'    
            ])
        }}
        <div>
            {{ Form::text('title', $task->title, ['class'=>'form-control mb-3']) }}
        </div>
        <div>
            {{ Form::textarea('description', $task->description, ['class'=>'form-control mb-3']) }}
        </div>
        <button class="btn btn-primary btn-block">Salvar</button>
        {{
            Form::close()
        }}
    </div>
</div>
@endsection