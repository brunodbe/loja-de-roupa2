<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/estilo2.css">

</head>

<body>

    <div class="menu">

        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <nav class="navbar navbar-light bg-light fixed-left">
                        <div class="container">
                            <a class="navbar-brand" href="#"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                                aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="menu.html"><i class="fa fa-home" aria-hidden="true">&nbsp Inicio</i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"> &nbsp Configurações</i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html"><i class="fa fa-sign-out" aria-hidden="true"> &nbsp Sair</i></a>
                                        </li>
                                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search"
                                            aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="entrada.html">Entrada/Produto</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="cadastro.html">Cadastro Clientes</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="estoque.html">Estoque</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="relatoriocliente.html">Relatórios</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="gerenciarpedido.html">Gerar Pedido</a></button>
                </div>
            </div>
        </div>
    </div>
 <div class="container mt-5 card">
    <form>
        <h2>Cadastro de clientes</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Razão social</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Razão social">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Nome Fantasia</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Nome Fantasia">
          </div>
        </div>
        <div class="form-group col-6">
          <label for="inputAddress">CNPJ/CPF</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="CPF/CNPJ">
        </div>
        <div class="form-group col-6">
          <label for="inputAddress2">Endereço 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputEstado">Estado</label>
            <select id="inputEstado" class="form-control">
              <option selected>Escolher...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" id="inputCEP">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Clique em mim
            </label>
          </div>
        </div>
        <div class="form-group mt-2 col-1">
                
            <input class="btn btn-primary mt-2 mb-2" type="button" onclick="funcao1()" value="Cadastrar" />
        </div>
        <script>
        function funcao1()
        {
        alert("Cadastrado com sucesso!!!!");
        }
        </script>
      </form>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 mt-5">Suporte<i class="fa fa-wrench" aria-hidden="true"></i></div>
                <div class="col-4 mt-5"><b>©Copyright</b></div>


            </div>

        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>