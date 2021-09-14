@extends('fixos.master')
@section('titulo','WinTech - Apuração')
@section('principal','nav-link')
@section('apuracao','nav-link')
@section('contato','nav-link')
@section('agremiacao','nav-link active')
@section('conteudo')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cadastro de Agremiações</h1>
</div>
<div class="col-md-6">
<form method="POST">
  <div class="form-group">
    <label for="InputName">Endereço de email</label>
    <input type="name" class="form-control" id="InputName" aria-describedby="emailHelp" placeholder="Agremiação">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
@endsection