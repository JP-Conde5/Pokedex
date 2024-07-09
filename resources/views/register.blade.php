@extends('layout')
@section('content')
<div class='jumbotron'>
    <div class='container-fluid'>
        <h1 class='mt-5 text-center'>Cadastrar Pokemon</h1>
    </div>
</div>
<form>
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" placeholder="Nome do Pokemon">
  </div>
  <div class="form-group">
    <label for="height">Altura</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection