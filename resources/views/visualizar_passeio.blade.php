@extends('main')

@section('titulo', 'Detalhes do Passeio')

@section('conteudo')

    <div class="row detalhes-visualizar">

        <!-- Sacas -->
        <div class="col-md-4 ">
            <h6 class="control-label" for="nome">
                <strong>Nome:</strong>
            </h6>
            <div>

                {{$passeio->name }}

            </div>
        </div>

        <div class="col-md-4">
            <h6 class="control-label" for="endereco" >
                <strong>Endereço:</strong>

            </h6>
            <div>

                {{$passeio->adress }}

            </div>
        </div>

        <div class="col-md-4">
            <h6 class="control-label" for="guia">
                <strong>Guia:</strong>

            </h6>
            <div>

                {{$passeio->first_name }}

            </div>
        </div>

        <div class="col-md-4">
            <h6 class="control-label" for="telefone">
                <strong>Telefone do guia:</strong>

            </h6>
            <div>

                {{$passeio->phone }}

            </div>
        </div>


    </div>


@endsection
@stop