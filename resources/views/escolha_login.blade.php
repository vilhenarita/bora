@extends('main')
@section('conteudo')
        <div class="row margin-geral">
          <div class="col">
            <h1 class="text-center text-white">Bem vindo a área de login<span class="badge badge-secondary"></span></h1>
          </div>
        </div>
        <div class="row margin-botao">
          <div class="col">
            <div class="text-center">
              <a href="turista/login" class="estilo-green btn btn-primary btn-lg active botao" role="button" aria-pressed="true">Sou Turista</a>
              <a href="guia/login" class="estilo-green btn btn-primary btn-lg active botao" role="button" aria-pressed="true">Sou Guia</a>
            </div>
          </div>
        </div>
@stop