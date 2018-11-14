$(document).ready(() => {
	$("#search").keypress((e)=>{

		if(e.which == 13){
			let search = $("#search").val();

			$.ajax({
				"url" : "process_debug.php",//action
				"data" : {"search" : search },//<input>
				"type" : "POST",//method
				"success": (data) => {

					if(data == ""){
						
					$("#summary").html("No info!");
					}

					else{
					let pokemonCaught = JSON.parse(data);

					$("#summary").css("color", "green");
					$("#summary").append("<hr>");
					$("#summary").append("Name: " + pokemonCaught.name + "<br>");
					$("#summary").append("Type: " + pokemonCaught.type + "<br>");
					$("#summary").append("Basic Move: " + pokemonCaught.moves.basic + "<br>");
					$("#summary").append("Special Move: " + pokemonCaught.moves.special + "<br>");
					
				}	
					
				} 
			});

			// 	$("#summary").html(search);
		}
	});

});