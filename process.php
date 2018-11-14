<?php
	
	$wth = $_POST['doge'];
	$convert = strtolower($wth);


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

	if(array_key_exists($convert, $pokedex)){
		echo json_encode($pokedex[$convert]);
	}
	else{

		echo "";
	}

?>