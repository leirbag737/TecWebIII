@extends('layout')

@section('titulo')
    Cadastrar Série
@endsection

@section('conteudo')
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button class="btn btn-primary mt-3">Adicionar</button>
    </form>
@endsection
