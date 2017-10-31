		
<?php
    session_start();

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }

    $dados = $_SESSION['produtos'];
    sort($dados);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<title>FarmFill</title>	
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	</head>
	<body>
	<div class="container container-fluid">
		<div class="container">
		<p>Farmácia</p>
		</div>
	</div>
        <center>
        	<h1>Cadastro Produtos</h1>
            <form action="add.php" method="POST">
                <p>Nome</p>
                <input type="text" name="nome"><br>
                <p>Quantidade</p>
                <input type="text" name="quantidade"><br>
                <p>Volume</p>
                <input type="date" name="volume"><br>
                <p>Preço</p>
                <input type="nome" name="preco"><br>
            </form>
                <table>
                    <?php foreach ($dados as $chave => $dado): ?>
                        <tr>
                           <th>Nome</th>
                           <th>Quantidade</th>
                           <th>Volume</th>
                           <th>Preço</th>
                        </tr>
                        <tr>
                      	   <td><?=$dado[0]?></td></th>
                           <td><?=$dado[1]?> </td></th>
                           <td><?=$dado[2]?> </td></th>
                           <td><?=$dado[3]?> </td></th>
                           <td><a href="delete.php?id=<?=$chave?>">Descartar</a></td>     
                        </tr>
		    <?php endforeach ?>
                </table>
        </center>
        <link rel="stylesheet" type="text/css" href="css/table.css">
    </body>
</html>
