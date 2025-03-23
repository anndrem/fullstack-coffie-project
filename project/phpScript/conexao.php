<?php
header('../src/index.php', true);

$str_conn = [
        'servidor' => 'localhost',
        'usuario' => 'root',
        'senha' => '',
        'banco' => 'coffe_lilBro'
];

$conn = new mysqli($str_conn['servidor'], $str_conn['usuario'], $str_conn['senha'], $str_conn['banco']);

if (!$conn) {
    echo "Erro ao conectar" .mysqli_connect_error();
    exit;
} else {
    echo "Concetado com sucessp";
}
?>