@extends('shared.base')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading"><h3>Atualize a categoria</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route('categorias.update', $categoria->id)}}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <h4>Dados da categoria</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" value="{{ $categoria->descricao }}" required>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
@endsection