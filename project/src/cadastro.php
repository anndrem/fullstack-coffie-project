<?php
include '../phpScript/conexao.php';


// $cad_txt = [
//     $nome => $_POST['nometxt'] ?? '',
//     $email => $_POST['emailtxt'] ?? '',
//     $cad_username => $_POST['cad_username'] ?? '',
//     $cad_senha => $_POST['cad_senha'] ?? '',
// ];

// foreach ($cad_txt as $key => $value) {
//     if (empty($value)) {
//         die("Error: O campo {$key} não pode estar vazio");
//     }
// }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>coffe | cadastro</title>
</head>

<body>
    <div class="menu-list">
        <ul class="list">
            <li class="logo">
                <a href="#" class="open-list-responsive">
                    <i class="fa-solid fa-mug-saucer"></i>
                </a>
            </li>
            <li class="item"><a href="home.php">home</a></li>
            <li class="item"><a href="#sobre">quem somos</a></li>
            <li class="item">
                <a href="login.html" alt="Login"><i class="fa-solid fa-arrow-right-to-bracket"></i></a>
            </li>
            <li class="item">
                <a href="" value="criar conta"><i class="fa-solid fa-user-plus"></i></a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="container-login">
            <div class="voltar-home">
                <a href="home.html"><i class="fa-solid fa-right-to-bracket"></i></a>
            </div>
            <div class="titulo-txt">
                <h1>Cadastre-se </h1>
            </div>
            <div class="titulo">

                <div class="titulo-img">
                    <img src="imgs/undraw_quitting-time_azp9.svg" alt="">
                </div>
            </div>

            <form action="#" method="post">
                <div class="container-cad">
                    <div class="input-label">
                        <div class="lbline">
                            <h2>Nome</h2>
                        </div>
                        <input type="text" name="nometxt" id="user-txt-nome" placeholder="">
                    </div>
                    <div class="input-label">
                        <div class="lbline">
                            <h2>email</h2>
                        </div>
                        <input type="text" name="emailtxt" id="user-txt-email" placeholder="">
                    </div>
                </div>

                <div class="container-cad">
                    <div class="input-label">
                        <div class="lbline">
                            <h2>user</h2>
                        </div>
                        <input type="text" name="cad_username" id="user-txt-cad_user" placeholder="">
                    </div>
                    <div class="input-label">
                        <div class="lbline">
                            <h2>Senha</h2>
                        </div>
                        <input type="password" name="cad_senha" id="user-txt-cad_senha" placeholder="">
                    </div>
                </div>
                <div class="bnt-submit">
                    <input type="submit" value="Cadastrar" class="btn">
                </div>
            </form>

            <div class="aviso-span">
                <span class="aviso">
                    Conectado com sucesso
                </span>
            </div>

            <div class="redesociais">
                <ul class="icosn-list">
                    <li class="element"><i class="fa-brands fa-instagram"></i></li>
                    <li class="element"><i class="fa-brands fa-linkedin-in"></i></li>
                    <li class="element"><i class="fa-brands fa-github"></i></li>
                </ul>
            </div>
        </div>

        <script src="menu-responsive.js"></script>
</body>

</html>