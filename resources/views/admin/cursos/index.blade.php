@extends('layout.site') <!-- Vai extender do "site.blade.php" -->

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de cursos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicação</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->titulo }}</td>
                            <td>{{ $registro->descricao }}</td>
                            <td><img width="80" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}" /></td> <!-- o asset é um helper do laravel que busca o caminho da imagem -->
                            <td>{{ $registro->publicado }}</td>
                            <td><a class="btn deep-orange" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a></td> <!-- P/enviar um id, colocar a vírgula e depois fazer o $registro->id -->
                            <td><a class="btn red" href="{{ route('admin.cursos.deletar', $registro->id) }}">Deletar</a></td>
                        </tr>
                    @endforeach
                </tbody>          
            </table>
        </div>

        <div class="row">
            <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
        </div>

    </div>
@endsection