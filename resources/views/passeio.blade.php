@extends('main')
@section('conteudo')
@section('titulo', 'Passeios')

@section('conteudo')
    <div class="row">
        <table id = "example" class="table table-responsive">

            <thead>
            <th width="25%">Nome</th>
            <th width="15%">Endereço</th>

            </thead>
            <tbody>

            @foreach($passeios as $passeio)
                <tr>
                    <td>
                        {{ $passeio->name }}
                    </td>

                    <td>
                        {{ $passeio->adress }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>
@endsection
@stop