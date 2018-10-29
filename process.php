<?php
	
	// $wth = $_POST['doge'];
	//^^ "wth" variable will catch the information on variable "doge"

	// if ($wth == "") {
	// 	echo true;
	// }

	// else{
	// 	echo false;
	// }

// =================

	$wth = $_POST['doge'];

	$convert = strtolower($wth);


	$pikachu = ["name" => "Pickachu",
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
							"special" => "Hydropump"]
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


	// HARD WAY =======

	// foreach($pokedex as $p){
	// 	if($wth == $p){
	// 		echo $pokedex[$p];
	// 	}
	// }

	//=================


	//SHORTHAND WAY ===

	

	if (array_key_exists($convert, $pokedex)){
		echo json_encode($pokedex[$convert]);
	}
	else{

		echo "";
	}

	//=================
?>




