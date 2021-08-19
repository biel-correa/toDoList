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
            <label for="edit-title-task" class="h4">Title:</label>
            {{ Form::text('title', $task->title, ['class'=>'form-control mb-3', 'id'=>'edit-title-task']) }}
            @if($errors->has('title'))
                <p class="text-danger">
                    {{ $errors->first('title') }}
                </p>
            @endif
        </div>
        <div>
            <label for="edit-status-task" class="h4">Status:</label>
            {{ Form::text('status', $task->status, ['class'=>'form-control mb-3', 'id'=>'edit-status-task'])}}
            @if($errors->has('status'))
                <p class="text-danger">
                    {{ $errors->first('status') }}
                </p>
            @endif
        </div>
        <div>
            <label for="edit-description-task" class="h4">Description:</label>
            {{ Form::textarea('description', $task->description, ['class'=>'form-control mb-3', 'id'=>'edit-description-task']) }}
            @if($errors->has('description'))
                <p class="text-danger">
                    {{ $errors->first('description')}}
                </p>
            @endif
        </div>
        <button class="btn btn-primary btn-block">Salvar</button>
        {{
            Form::close()
        }}
    </div>
</div>
@endsection