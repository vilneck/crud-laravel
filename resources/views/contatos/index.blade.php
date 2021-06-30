@extends('templates.template')

@section('content')
    <div class="card text-left">
        <div class="card-body">

            <h4 class="card-title float-left">Meus contatos</h4>
            <a href="/contatos/create" class="float-right btn-sm btn-success" href="#" role="button"><i class="fa fa-plus" aria-hidden="true"></i> Cadastrar</a>
            <p class="card-text">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Fixo</th>
                            <th scope="col">Email</th>
                            <th scope="col">Criado em</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contatos as $contato)
                            <tr>
                                <th scope="row">{{ $contato->id }}</th>
                                <td>{{ $contato->nome }}</td>
                                <td>{{ $contato->sobrenome }}</td>
                                <td>{{ $contato->telefone_celular }}</td>
                                <td>{{ $contato->telefone_fixo}}</td>
                                <td>{{ $contato->email }}</td>
                                <td>{{ $contato->data_criacao }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i class="fa fa-th" aria-hidden="true"></i> Ações
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="{{url("contatos/$contato->id")}}"><i class="fa fa-edit text-primary" aria-hidden="true"></i> Ver</a>
                                          <a class="dropdown-item" href="#"><i class="fa fa-trash text-danger" aria-hidden="true"></i> Deletar</a>
                                          <a class="dropdown-item" href="#"><i class="fab fa-whatsapp text-success" aria-hidden="true"></i> Enviar um Zap</a>
                                        </div>
                                      </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
        </div>
    </div>
@endsection
