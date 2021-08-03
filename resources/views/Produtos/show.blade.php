@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do produto</div>
        <div class="panel-body">  
            <div class="row">
                <div class="col-md-12">
                    <h4>Sobre o produto </h4>
						<p>Descrição: {{$produtos->descricao}}</p>
						<p>Preço: R$ {{number_format($produtos->preco,2,',','.')}} </p>
						<p>Cor: </p>
						<p>Peso: </p>
						<p>Marca: </p>
                        <p>Categorias: 
                        @foreach($produtos->categorias as $categoria)                                 
                                    <a href="{{route('categorias.show' ,$categoria->id)}}">
                        {{$categoria->descricao}}           </a>                                                         
                        @endforeach   
                        </p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection