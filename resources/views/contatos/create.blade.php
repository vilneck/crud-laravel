@extends('templates.template')

@section('content')
    <div class="card text-left">
        <div class="card-body">

            <h4 class="card-title float-left"><a href="../contatos"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a> Criar Contato</h4>
            <p class="card-text">
                <form name="formCad" id="formCad" method="post" action="{{url('contatos')}}">
                    @csrf
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome"><br>
                    <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome"><br>
                    <input class="form-control" type="text" name="telefone_celular" id="telefone_celular" placeholder="Telefone Celular"><br>
                    <input class="form-control" type="text" name="telefone_fixo" id="telefone_fixo" placeholder="Telefone Fixo"><br>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email"><br>
                    <input class="btn btn-success" type="submit" value="Cadastrar">
                </form>
            </p>
        </div>
    </div>
@endsection
