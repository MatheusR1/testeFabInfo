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

    <div class="container">
        <h2 class="mb-3"> Cadastro Documentos</h2>
        <form method="POST" action="{{ route('documentos.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Nome Do Arquivo</label>
                <input name="nome_arquivo" type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo</label>
                <select name="tipo_id" class="form-control" id="exampleFormControlSelect1">
                    <option selected >selecione... </option>
                    @foreach ($tipoDocumento as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->tipo_nome }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success btn-md" type="submit"> Cadastrar</button>
        </form>
    </div>
@endsection
