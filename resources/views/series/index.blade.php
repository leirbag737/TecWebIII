@extends('layout')

@section('titulo')
    Listagem de Séries
@endsection

@section('conteudo')
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da série</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($series as $serie) : ?>
            <tr>
                <td>.</td>
                <td><?= $serie ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
@endsection
