<?php
include ('conexao.php');
if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    if (strlen($_POST['usuario']) == 0) {
        echo "preencha o campo USÚARIO";

    } else if (strlen($_POST['senha']) == 0) {
        echo "preencha sua SENHA";
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT *FROM usuarios WHERE usuario= '$usuario' AND senha ='$senha'";
        $sql_query = $mysqli->query($sql_code) or die("falaha na execução do código sql:" . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['usuarios'] = $usuario['id'];

            header("Location:menu.php");


        } else {
            echo "Usuario ou senha incorretos";
        }


    }
    if (isset($_POST['submit'])) {
        
    }

}

$usuario = $mysqli->real_escape_string($_POST['usuario']);
$senha = $mysqli->real_escape_string($_POST['senha']);
$sql_code = "INSERT INTO `usuarios` (`usuario`, `senha`, `id`) VALUES ('$usuario', '$senha', 'NULL');";
$sql_query = $mysqli->query($sql_code);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/estilo3.css" rel="stylesheet">

</head>

<body>
    <div class="container" id="container">
        <div class="form-container register-container">
            <form action="login.php" method="POST">
                <h1>Registro aqui</h1>
                <input type="text" name="nome" placeholder="Nome">
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="senha" placeholder="Senha">
                <button><input type="submit" name="submit" value="Enviar"></button>
                <span>Ou entre com sua conta</span>
                <div class="social-container">
                    <a href="#" class="social"></a>

                </div>
            </form>
        </div>

        <div class="form-container login-container">
            <form action="" method="POST">
                <h1>Login</h1>
                <input type="text" name="usuario" placeholder="Usuario">
                <input type="password" name="senha" placeholder="Senha">
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="Lembrar de mim"></label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Lembrar Senha</a>
                    </div>
                </div>
                <button type="">Login</button>
                <span>Ou crie sua conta</span>
                <div class="social-container">

                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Bem vindos<br>Amigos</h1>
                    <p>Se tiver uma conta, faça login</p>
                    <button class="gost" id="login">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start</h1>
                    <p>Se não tiver conta, registre-se</p>
                    <button class="ghost" id="register">Registre-se</button>



                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>