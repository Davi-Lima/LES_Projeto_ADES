@extends('fixos.master')
@section('titulo','WinTech - Apuração')
@section('principal','nav-link')
@section('apuracao','nav-link')
@section('contato','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Listagem de Agremiações</h1>
    @if(auth()->check())
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <a role="button" href="#" class="btn btn-sm btn-outline-secondary">Cadastrar</a>
        </div>
    </div>
    @endif
</div>
<div class="col-md-6">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">NOME</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($NomeVarView as $d)
                    <tr>
                        <td scope="row">{{ $d->nome }}</td>
                        <td>
                            <a role="button" class="btn btn-primary btn-sm" href="#">Exibir</a>
                            <a role="button" class="btn btn-warning btn-sm" href="#">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection