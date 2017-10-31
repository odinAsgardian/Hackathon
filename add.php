<?php
    session_start();

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $volume = $_POST['volume'];
    $preco = $_POST['preco'];
    
    array_push($_SESSION['produtos'], [$nome, $quantidade,$volume,$preco]);

    header('location: index.php');
?>
