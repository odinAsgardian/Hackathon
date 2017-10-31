<!-- 		
<?php
    session_start();

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }

    $dados = $_SESSION['produtos'];
    sort($dados);

?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<title>FarmFill</title>	
		<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	        <link rel="stylesheet" type="text/css" href="css/table.css">
	</head>
	<body>
		
		<button click="getData('ref');">button</button>
        <!-- <center>
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
        </center> -->
	</body>
	
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyBuHIAh8eR5UgTKfHAtKaxCfNGo-ntCUKA",
	    authDomain: "farmacia-86c1d.firebaseapp.com",
	    databaseURL: "https://farmacia-86c1d.firebaseio.com",
	    projectId: "farmacia-86c1d",
	    storageBucket: "farmacia-86c1d.appspot.com",
	    messagingSenderId: "307955126145"
	  };
	  firebase.initializeApp(config);

	  var database = firebase.database();
	  var url = database.ref();
	  var urlRef = url.child("Farmacia");
	  urlRef.once("value", function(snapshot){
	  	snapshot.forEach(function(child){
	  		console.log(child.key+": "+child.val().descricao + ": " +child.val().loteUm);
	  		var sn = snapshot.child.val().loteUm.forEach(function(child){
	  			console.log(child.key+ ": "+ child.val());
	  		});
	  	});
	  });
	</script>
</html>

