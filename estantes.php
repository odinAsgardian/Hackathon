<?php 

		
		// $prateleiras = array(
			
		// 	"altura" => 39.4,
		// 	"comprimento" => 58.0,
		// 	"largura" => 91.2
		// );

		// $

		// echo json_encode($prateleiras);


		// function CurvaABC($somaDosProdutos, $produtos[]){
			
		// 	$x = 0;
		// 	for($i = 0; $i < count($produtos); $i++ ){

		// 	  $x += ($produtos[$i]->demanda * $produto[$i]->preco);
		// 	  $somaDosProdutos++;
				
		// 	}

		// 	for ($j = 0; $j < count($produtos); $j++) { 
				
		// 		$y = $produtos[$j]->preco / $x;
		// 	}

		// }

		$json_file = file_get_contents("farmacia-86c1d-export.json");
		$json_str = json_decode($json_file, true);
		$itens = $json_str['nodes'];

		// foreach ( $itens['Farmacia'] as $val) { 
		// 	echo $val['descricao'] ."<br>"; 
		// } 




 ?>