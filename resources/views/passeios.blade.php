@extends('main')
@section('conteudo')
        <div class="row margin-geral">
          <div class="col">
            <h1 class="text-center text-white">Conectando você à Amazônia<span class="badge badge-secondary"></span></h1>
          </div>
        </div>
        <div class="row margin-botao">
          <div class="col">
            <div class="text-center">
              <a href="turista/cadastro" class="estilo-green btn btn-primary btn-lg active botao" role="button" aria-pressed="true">Turista</a>
              <a href="guia/cadastro" class="estilo-green btn btn-primary btn-lg active botao" role="button" aria-pressed="true">Guia</a>
            </div>
          </div>
        </div>
@stop