@extends('templates.template')

@section('content')
    <div class="card text-left">
        <div class="card-body">

            <h4 class="card-title float-left"><a href="../contatos"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a> Contato - {{$contato->nome}} {{$contato->sobrenome}}</h4>
            <a name="" id="" class="float-right btn-sm btn-primary" href="{{url("contatos/$contato->id/edit")}}" role="button"><i class="fa fa-edit" aria-hidden="true"></i> Editar</a>
            <p class="card-text">
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td>Celular:</td>
                        <td>{{$contato->telefone_celular}}</td>
                    </tr>
                    <tr>
                        <td>Telefone Fixo:</td>
                        <td>{{$contato->telefone_fixo}}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{$contato->email}}</td>
                    </tr>
                    <tr>
                        <td>Criado em:</td>
                        <td>{{$contato->criado_em}}</td>
                    </tr>
                    <tr>
                        <td>Observações:</td>
                        <td>{{$contato->observacoes}}</td>
                    </tr>
                    </tbody>
                </table>
            </p>
        </div>
    </div>
@endsection
