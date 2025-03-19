<?php
$produtosCafe = [
    [
        'nome' => "Café completo",
        'preco' => "R$10,00",
        'img' => "imgs/undraw_breakfast_rgx5.svg",
    ],
    [
        'nome' => "Café completo",
        'preco' => "R$10,00",
        'img' => "imgs/undraw_breakfast_rgx5.svg",
    ],
    [
        'nome' => "Café completo",
        'preco' => "R$10,00",
        'img' => "imgs/undraw_breakfast_rgx5.svg",
    ]
];

$produtosAlmoco = [
    [
        'nome' => 'Prato executivo',
        'preco' => 'R$20,00',
        'img' => 'imgs/undraw_special-event_hv54.svg',
    ],
    [
        'nome' => 'Prato executivo',
        'preco' => 'R$20,00',
        'img' => 'imgs/undraw_special-event_hv54.svg',
    ],
    [
        'nome' => 'Prato executivo',
        'preco' => 'R$20,00',
        'img' => 'imgs/undraw_special-event_hv54.svg',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/animacao-home.css">
    <title>Document</title>
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
        <div class="titulo-logo">
            <div class="animacao">
                <h1 class="titulo-text titulo-animacao">Coffe do lil Bro</h1>
                <span class="span-animacao"></span>
            </div>
            <a href="login.html"><button class="btn titulo-btn">Entrar</button></a>
        </div>
        <div class="titulo-img"><img src="imgs/undraw_coffee-with-friends_ocg2.svg" alt=""></div>
    </div>
    <div class="container-produtos" id="sobre">
        <div class="produtos-titulo">
            <div class="titulo-txt">
                <h1>Pratos </h1>
            </div>

            <div class="titulo-switch">
                <h2 class="swt-txt swt-almoco escolhido">Almoço</h2>
                <div class="switch">
                    <div class="switch-opt"></div>
                </div>
                <h2 class="swt-txt swt-cafe">Café</h2>
            </div>
        </div>
        <div class="container-cards-produtos">
            <!-- cafe -->
            <div class="container-cards" id="divCafe">
                <?php foreach ($produtosCafe as $coffe): ?>
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $coffe['img'] ?>" alt="">
                        </div>
                        <div class="produto-info">
                            <h2><?php echo $coffe['nome'] ?>
                                <p class="txt-preco">
                                    <?php echo $coffe['preco'] ?>
                                </p>
                            </h2>
                            <a href="admPage.html"><button class="btn">Saiba Mais</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- Almoco -->
            <div class="container-cards" id="divAlmoco">
                <?php foreach ($produtosAlmoco as $lunch): ?>
                    <div class="card">
                        <div class="img">
                            <img src="<?php echo $lunch['img'] ?>" alt="">
                        </div>
                        <div class="produto-info">
                            <h2><?php echo $lunch['nome'] ?>
                                <p class="txt-preco">
                                    <?php echo $lunch['preco'] ?>
                                </p>
                            </h2>
                            <a href="admPage.html"><button class="btn">Saiba Mais</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="menu-responsive.js"></script>
    <script src="switch.js"></script>

</body>

</html>