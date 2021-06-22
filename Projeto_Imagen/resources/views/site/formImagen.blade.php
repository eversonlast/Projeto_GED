@extends('layouts.tela')

@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-4">            
            <div class="row mt-3"> 
                <div class="col-4 mx-0">
                    <label for="numero">Digite o número da imagem</label>
                    <input type="text" class="form-control" id="numero" placeholder="Digite o número da imagem...">                                    
                </div>             
            </div>
            <div class="row">       
                <div class="col-12">
                    <label for="nome">Nome da imagem</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite o nome da imagem">                
                </div>      
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="assunto">Assunto</label>
                    <input type="text" class="form-control" id="assunto" placeholder="Digite o assunto">
                </div>
                <div class="col-6">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" placeholder="Digite o complemento">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="mes">Mês</label>
                    <input type="text" class="form-control" id="mes" placeholder="Digite o mês.">
                </div>
                <div class="col-6">
                    <label for="ano">Ano</label>
                    <input type="text" class="form-control" id="ano" placeholder="Exemplo XXXX">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="pagina">Páginas</label>
                    <input type="text" class="form-control" id="pagina" placeholder="Somente número...">
                </div>
            </div>

            <div class="row">
                <div class="col-8">
                    <label for="arquivo">Arquivo</label>
                    <input type="text" class="form-control" id="arquivo" placeholder="Somente arquivo...">
                </div>
                <div class="col-4">
                    <label for="flagexportado">Flag Exportado</label>
                    <select name="flagexportado" id="flagexportado" class="custom-select">
                        <option selected>Selecione...</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <label for="lote">Lote</label>
                    <input type="text" class="form-control" id="lote" placeholder="Digite o lote...">
                </div>
                <div class="col-8">
                    <label for="tipo">Tipo</label>
                    <input type="text" class="form-control" id="tipo" placeholder="Digite o tipo..">
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-3">
                    <input type="file"  id="path">  
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-3 mx-2 text-center" >
                    <input type="submit" class="btn btn-primary" value="Salvar"
                    data-toggle="tooltip" data-placement="left" 
                    title="Serve para salvar os dados" show="50" >
                    <button class="btn btn-outline-danger mx-2"
                    data-toggle="tooltip" data-placement="right" 
                    title="Tem certeza que quer cancelar" show="50"
                    >Cancelar</button>
                </div>
            </div>
            
        </div>
        


    </form>
@endsection