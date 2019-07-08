@extends('main')
@section('conteudo')
        <div class="row login">
          <div class="col-md-6 alinhamento-login">
              <h3>Cadastro de guia</h3>
              <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Primeiro nome</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Primeiro nome">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Último nome</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Último nome">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Email</label>
                      <input type="email" class="form-control" id="inputAddress" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Senha</label>
                        <input type="password" class="form-control" id="inputAddress" placeholder="Senha">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">RG</label>
                            <input type="number" class="form-control" id="inputAddress2" placeholder="0000000">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">CPF</label>
                            <input type="number" class="form-control" id="inputAddress2" placeholder="000.000.000-00">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Data de nascimento</label>
                            <input type="date" class="form-control" id="inputAddress2" placeholder="00/00/000">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Gênero</label>
                            <select id="inputState" class="form-control">
                                <option selected>Escolha</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Número de telefone</label>
                        <input type="number" class="form-control" id="inputAddress2" placeholder="(00)000000000">
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

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Tenho CNH
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Falo inglês
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Tenho carro
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
          </div>
        </div>
@stop