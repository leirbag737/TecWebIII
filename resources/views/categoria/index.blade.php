@extends('layout')

@section('titulo')
    Listagem de Categoria
@endsection

@section('conteudo')
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria) : ?>
            <tr>
                <td>.</td>
                <td><?= $categoria ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
