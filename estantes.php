<html>
	<head>

		<script src="js/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	</head>

		<script>
			$(document).ready(function(){
				
			});
		</script>		

	<body>	
		
		<table class="table">
	   		<thead>
	   			<tr>	
		   			<th>descrição</th>
		   			<!-- th>demanda anual</th>
		   			<th>embalagem</th>
		   			<th>preço p/ caixa</th>
		   			<th>quantidade p/ caixa</th>
		   			<th>U.M</th>
		   			<th>caixas lado a lado</th> -->
	   			</tr>
	   		</thead>
		   		<tbody>
		   			<tr>
		   				
		   			</tr>
		   		</tbody>
	   </table>
		
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
	  var urlLot = url.child("loteUm");
	  urlRef.once("value", function(snapshot){
	  	snapshot.forEach(function(child, i){
	  		console.log(child.key+": "+child.val().descricao);
	  		// var sn = snapshot[i].child.val().loteUm.forEach(function(children){
	  		// 	console.log(children.key+ ": "+ children.val());
	  		// });
	  	});
	  });


	  urlLot.once("value", function(snapshot){
	  	snapshot.forEach(function(child, i){
	  		console.log(child.key+": "+child.val().quantidade);
	  		// var sn = snapshot[i].child.val().loteUm.forEach(function(children){
	  		// 	console.log(children.key+ ": "+ children.val());
	  		// });
	  	});
	  });
	  </script>
</html>