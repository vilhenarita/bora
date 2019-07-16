@extends('main')
@section('conteudo')
        <div class="row login">
                <div class="col-md-6 alinhamento-login">
                    <h3>Cadastro de passeio</h3>
                    <form method="post" action="{{route('passeios.store')}}">
                        @csrf
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Nome do passeio">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Endereço</label>
                                <input type="text" name="adress" class="form-control" id="inputAdress" placeholder="Logradouro">
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Descrição</label>
                                    <input type="text" name="description" class="form-control" id="inputDescription" placeholder="Descrição">
                                </div>
                            </div>
                            <label for="inputAddress2">Imagem</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                             </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                </div>
              </div>
@stop