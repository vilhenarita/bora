<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}" crossorigin="anonymous">

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
                    <a class="nav-link text-white" href="/"><img src="{{ asset('img/logo.png') }}" class="img-fluid logo" alt="Responsive image"></a>
                    
                  </li>
                  <div class="alinhamento">
                    <div class="row">
                        <li class="nav-item text-right">
                            <a class="nav-link text-white" href="passeio"> <h5>Passeios</h5></a>
                        </li>
                        <li class="nav-item text-right">
                            <a class="nav-link text-white" href="/escolha_login"> <h5>Login</h5></a>
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
        @yield('conteudo')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
  </body>
</html>