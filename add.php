<?php
    session_start();

    $nome = $_POST['nome'];
    $quantidade_por_caixa = $_POST['quantidade_por_caixa'];
    $embalagem = $_POST['embalagem'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $altura = $_POST['altura'];
    $preco = $_POST['preco'];
    $demanda_anual = $_POST['demanda_anual'];
    $lote1 = $_POST['lote1'];
    $lote2 = $_POST['lote2'];
    $lote3 = $_POST['lote3'];
    $quantidade = $_POST['quantidade'];
    $entrada = $_POST['entrada'];
    $validade = $_POST['validade'];
    $venda = $_POST['venda'];
    array_push($_SESSION['produtos'], [$nome, $quantidade_por_caixa,$embalagem,$largura,$comprimento,$altura,$preco,$demanda_anual,$lote1,$lote2,$lote3,$quantidade,$entrada,$validade,$venda]);

    header('location: index.php');
?>
