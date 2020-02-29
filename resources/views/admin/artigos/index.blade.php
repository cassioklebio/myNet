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

    <modal nome="adicionar" titulo="Adicionar">
        <div class="container-flex">
        <formulario id="formAdicionar" css="" action="{{route('artigos.store')}}" method="post" enctype=""  token="{{csrf_token()}}">
                <div class="form-group">
                    <label class="col-form-label" for="titulo"> Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="descricao"> Descrição </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div> 
                <div class="form-group">
                    <label for="conteudo" class="col-form-label"> Conteúdo </label>
                    <textarea class="form-control" id="conteudo" name="conteudo" style=" min-width:500px; max-width:100%;min-height:50px;height:100%;width:100%;"></textarea>
                </div> 
                <div class="form-group">
                    <label for="data"> Data </label>
                    <input type="datetime-local" class="form-control" id="data" name="data">
                </div>            
            </formulario>
        </div>
        <span slot="botoes">
            <button form="formAdicionar" class="btn btn-info glyphicon glyphicon-floppy-disk">Adicionar</button>
        </span>
       {{--modal editar  --}}
    </modal>
    <modal nome="editar" titulo="Editar">
        <formulario id="formEditar" css="" action="#" method="post" enctype="multipart/form-data"  token="12345">
            <div class="form-group">
                <label for="titulo"> Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo"  placeholder="Título">
            </div>
            <div class="form-group">
                <label for="descricao"> Descrição </label>
                <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
            </div>
        </formulario>
        <span slot="botoes">
            <button form="formEditar" class="btn btn-info glyphicon glyphicon-floppy-disk">Atualizar</button>
        </span>
    </modal>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
        <p>@{{$store.state.item.descricao}}</p>
    </modal>
    @endsection