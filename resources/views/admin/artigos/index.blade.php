@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel subtitulo="Lista de Artigos">
            <tabela-lista 
                v-bind:titulos="['#', 'Titulo', 'Descrição']"
                v-bind:itens="[[1,'PHP OO','Curso de PHP OO'],[2,'Vue js','Curso de Vue']]"
                ordem="asc" ordemcol="2"
                criar="#criar" detalhe="#detalher" editar="#editar" deletar="#deletar" token="8998989839989">
                
                
            </tabela-lista>
            

        </painel>
    </pagina>
@endsection