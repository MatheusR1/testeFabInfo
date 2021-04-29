@extends('layouts.app')

@section('table')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="h3">
        <p>Lista de documentos cadastrados</p>
    </div>
    <div class=".container">
        <div class="table-responsive-md">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($documentos as $documento)

                        <tr>
                            <td>{{ $documento->id }}</td>
                            <td>{{ $documento->titulo }}</td>
                            <td>{{ $documento->nome_arquivo }}</td>
                            <td>{{ $documento->tipoDocumento->tipo_nome }}</td>
                            <td class="btn-group">
                                <a class="btn btn-primary" href="{{ route('documentos.edit', ['documento' => $documento->id]) }}">editar</a>
                                <form method="POST" action="{{ route('documentos.destroy', ['documento' => $documento->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger btn ml-1"
                                        onclick="return confirm('Deseja excluir mesmo?')"
                                        type="submit"> deletar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-secondary" href="{{route('documentos.create')}}">voltar</a>
        </div>
    </div>
@endsection
