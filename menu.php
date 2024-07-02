<?php
if(!isset($_SESSION)){
    session_start();

}

?>

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
                    <nav class="navbar navbar-light bg-light fixed-right">
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
                                            <a class="nav-link active" aria-current="page" href="menu.html"><i
                                                    class="fa fa-home" aria-hidden="true">&nbsp Inicio</i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true">&nbsp
                                                    Configurações</i></a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="login.php"><i class="fa fa-sign-out"
                                                    aria-hidden="true"> &nbsp Sair</i></a>
                                        </li>
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
                    <button type="button" class="botao"><a href="entrada.php">Entrada/Produto</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="cadastro.php">Cadastro Clientes</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="estoque.php">Estoque</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="relatorio.php">Relatórios</a></button>
                </div>
                <div class="col-2 text-center mt-3">
                    <button type="button" class="botao"><a href="gerenciarpedido.php">Gerar Pedido</a></button>
                </div>
            </div>
        </div>
    </div>

    <div class="main text-center"><br><br><br><br><br><br><br>
        <img src="assets/imagens/main.png" alt="logo">
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br>

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