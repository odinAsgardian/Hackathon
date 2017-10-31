<html>
	<head>
		<title>FarmFill</title>	
		<script src="https://www.gstatic.com/firebasejs/4.6.0/firebase.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	</head>
	<body>
		
		<button click="getData('ref');">button</button>
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
	  	});
	  });
	</script>
</html>