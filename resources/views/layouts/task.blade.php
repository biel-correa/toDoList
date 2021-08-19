<div class="col-sm-4 mb-4">
    <div class="card task">
        <div class="color" style="background-color: {{ $item-> color}}; width: 100%; height: 20px; border-radius: .25rem .25rem 0 0"></div>
        <div class="card-body">
            <h5 class="card-title">
                {{$item->title}}
            </h5>
            <p>{{$item->status}}</p>
            <p class="card-text">
                {{$item->description}}
            </p>
            <a class="btn btn-success" href="{{route('edit', ['id'=>$item->id])}}">Editar</a>
            <a class="btn btn-danger" href="{{route('delete', ['id'=>$item->id])}}">Deletar</a>
        </div>
    </div>
</div>