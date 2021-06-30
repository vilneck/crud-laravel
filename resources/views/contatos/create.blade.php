@extends('templates.template')

@section('content')
    <div class="card text-left">
        <div class="card-body">

            <h4 class="card-title float-left"><a href="/contatos"><i class="fa fa-arrow-circle-left"></i></a>
                @if(isset($contato)) Editar @else Cadastrar @endif  Contato</h4>
            <p class="card-text">
                @if(isset($contato))
                <form method="post" action="{{ url("contatos/$contato->id") }}">
                    @method('PUT')
                @else
                <form method="post" action="{{ url('contatos') }}">
                @endif

                @csrf
                <input value="{{$contato->nome ?? ''}}" class="form-control" type="text" name="nome" id="nome" placeholder="Nome"><br>
                <input value="{{$contato->sobrenome ?? ''}}" class="form-control" type="text" name="sobrenome" id="sobrenome"
                    placeholder="Sobrenome"><br>
                <input class="form-control" type="text" value="{{$contato->telefone_celular ?? ''}}" name="telefone_celular" id="telefone_celular"
                    placeholder="Telefone Celular"><br>
                <input class="form-control" type="text" value="{{$contato->telefone_fixo ?? ''}}" name="telefone_fixo" id="telefone_fixo"
                    placeholder="Telefone Fixo"><br>
                <input class="form-control" type="email" value="{{$contato->email ?? ''}}" name="email" id="email" placeholder="Email"><br>
                @if (@isset($errors) && count($errors) > 0)
                <div class="text-center mb-2 p-2 alert-danger">
                    @foreach ($errors->all() as $erro)
                        {{ $erro }}<br>
                    @endforeach
                </div>
            @endif
                <input class="btn btn-success" type="submit" value="Salvar">
            </form>

            </p>
        </div>
    </div>
@endsection
