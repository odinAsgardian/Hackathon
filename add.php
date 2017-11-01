<?php
    session_start();

    $produto = array();

    $nome = $_POST['nome'];
    $quantidade_por_caixa = $_POST['quantidade_por_caixa'];
    $embalagem = $_POST['embalagem'];
    $largura = $_POST['largura'];
    $comprimento = $_POST['comprimento'];
    $altura = $_POST['altura'];
    $preco = $_POST['preco'];
    $demanda_anual = $_POST['demanda_anual'];
    // $lote1 = $_POST['lote1'];
    // $lote2 = $_POST['lote2'];
    // $lote3 = $_POST['lote3'];
    $quantidade = $_POST['quantidade'];
    $entrada = $_POST['entrada'];
    $validade = $_POST['validade'];
    $venda = $_POST['venda'];

    array_push($_SESSION['produtos'], [$nome, $quantidade_por_caixa,$embalagem,$largura,$comprimento,$altura,$preco,$demanda_anual,$quantidade,$entrada,$validade,$venda]);

    // header('location: index.php');
    // var_dump($_SESSION['produtos']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        <table>
            <tr>
                <th> Descrição </th>
                <th> Quantidade Por Caixa </th>
                <th> Embalagem </th>
                <th> Largura</th>
                <th> Comprimento </th>
                <th> Altura </th>
                <th> Preço</th>
                <th> Demanda Anual</th>
                <th> Quantidade </th>
                <th> Entrada</th>
                <th> Validade</th>
                <th> Venda</th>
            </tr>
            <tr>
            <?php
            foreach ($_SESSION['produtos'] as $key) {
                echo "<td>" . $nome . "<td>";
                echo "<td>" . $quantidade_por_caixa . "<td>";
                echo "<td>" . $embalagem . "<td>";
                echo "<td>" . $largura . "<td>";
                echo "<td>" . $comprimento . "<td>";
                echo "<td>" . $altura . "<td>";
                echo "<td>" . $preco . "<td>";
                echo "<td>" . $demanda_anual . "<td>";
                echo "<td>" . $quantidade . "<td>";
                echo "<td>" . $entrada . "<td>";
                echo "<td>" . $validade . "<td>";
                echo "<td>" . $venda . "<td>";
             } 
             ?>
            </tr>
        </table>
    </body>
</html>
