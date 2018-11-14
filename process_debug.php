<?php 

	$search = $_POST['search'];
	$lower = strtolower($search);


	$pikachu = ["name" => "Pikachu",
				"type" => "Electric",
				"moves" => ["basic" => "Thundershock", 
				"special" => "Thunderbolt"]
			];

	$bulbasaur = ["name" => "Bulbasaur",
				"type" => "Grass",
				"moves" => ["basic" => "Vine Whip", 
				"special" => "Solar Beam"]
			];

	$squirtle = ["name" => "Squirtle",
				"type" => "Water",
				"moves" => ["basic" => "Bubble", 
				"special" => "Hydro Pump"]
			];		

	$charmander = ["name" => "Charmander",
				"type" => "Fire",
				"moves" => ["basic" => "Ember", 
				"special" => "Fire Blast"]
			];	

	$pokedex = ['pikachu' => $pikachu,
				'bulbasaur' => $bulbasaur,
				'squirtle' => $squirtle,
				'charmander' => $charmander];

	// foreach($pokedex as $p){
	// 	if($search == $p){
	// 		echo $pokedex[$p];
	// 	}
	// }					

	if(array_key_exists($lower, $pokedex)){
		echo json_encode($pokedex[$lower]);
	}			
 	else{

 		echo "";
 	}	


 // if($search == ""){
 // 	echo true;
 // }
 // else{
 // 	echo false;
 // }

 // echo $search;

?>