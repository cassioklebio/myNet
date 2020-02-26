@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <breadcrumb v-bind:lista="{{$listaBreadCrumb}}"></breadcrumb>
        
        
        <hr>
        <painel subtitulo="Lista de Artigos">
            
            <tabela-lista
                v-bind:titulos="['#', 'Titulo', 'Descrição']"
                v-bind:itens="{{$listaArtigos}}"
                ordem="asc" ordemcol="2"
                criar="#criar" detalhe="#detalher" editar="#editar" deletar="#deletar" token="8998989839989"
                modal="sim">
                
                
            </tabela-lista>
            

        </painel>
    </pagina>

    <modal nome="adicionar">
        <painel subtitulo="Adicionar">
            <formulario css="" action="#" method="post" enctype=""  token="">
                <div class="form-group">
                    <label for="titulo"> Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao"> Descrição </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info glyphicon glyphicon-floppy-disk">Adicionar</button>
            </formulario>

        </painel>
    </modal>
    <modal nome="editar">
        <painel subtitulo="Editar">
            <formulario css="" action="#" method="post" enctype=""  token="">
                <div class="form-group">
                    <label for="titulo"> Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao"> Descrição </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button class="btn btn-info glyphicon glyphicon-floppy-disk">Atualizar</button>
            </formulario>

        </painel>
    </modal>
    @endsection