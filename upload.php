<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['foto']['name'];
    $type = $_FILES['foto']['type'];
    $temp = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $arquivo = "img/".$file;

    echo "Nome: $file<br>";
    echo "Tipo: $type<br>";
    echo "Temp: $temp<br>";
    echo "Tamanho: $size<br>";

    // mover imagem de temp "armazenamento temporario para pasta"
   
    if (move_uploaded_file($temp, $arquivo)) {

        echo "<h1>Foto enviada com sucesso!</h1> <br>";
        echo '<img src="'.$arquivo.'" alt="'.$file.'" width="250px">';

    }
}