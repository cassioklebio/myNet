@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel subtitulo="Dashboard">
            <div class="row">
                <div class="col-md-4">
                <caixa qtd="80" subtitulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="1500" subtitulo="Artigos" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                </div>
                <div class="col-md-4">
                    <caixa qtd="3" subtitulo="Artigos" url="#" cor="red" icone="ion ion-person"></caixa>
                </div>

            </div>

        </painel>
    </pagina>
@endsection
