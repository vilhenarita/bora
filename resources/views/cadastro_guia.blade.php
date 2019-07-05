<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css" crossorigin="anonymous">

    <title>Bem Vindo ao Bora</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    <a class="nav-link text-white" href="index.html"><img src="img/logo.png" class="img-fluid" alt="Responsive image"></a>
                  </li>
                  <div class="alinhamento">
                    <div class="row">
                        <li class="nav-item text-right">
                            <a class="nav-link text-white" href="#"> <h5>Passeios</h5></a>
                        </li>
                        <li class="nav-item text-right">
                            <a class="nav-link text-white" href="escolha_login.html"> <h5>Login</h5></a>
                        </li>
                    </div>
                  </div>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form> -->
              </div>
            </nav>
          </div>
        </div>
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>