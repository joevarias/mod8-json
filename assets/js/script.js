$(document).ready(() => {
	$("#search").keypress((e)=>{

		if(e.which == 13){
			let search = $("#search").val();
			
			$.ajax({
				"url" : "process.php",
				"data" : {"doge" : search },//^^this will put the "doge" as a variable data to process.php
				"type" : "POST",
				"success": (data) => {// ^^ this "data" catches the reply from process.php
	
					if(data == ""){

					$("#summary").html("no info found!");
					}

					else{
					let pokemonCaught = JSON.parse(data);

					$("#summary").css("color", "green");
					$("#summary").html("");
					$("#summary").append("Name: " + pokemonCaught.name +"<br>");
					$("#summary").append("Type: " + pokemonCaught.type +"<br>");
					$("#summary").append("Basic Move: " + pokemonCaught.moves.basic +"<br>");
					$("#summary").append("Special Move: " + pokemonCaught.moves.special +"<br>");						
						
				}
						
				}
			});

		}
	});

});