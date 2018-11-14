$(document).ready(() => 

	)
	blur

		$.ajax({
			"url" : "partials/process_frame.php",
			"data" : {"fname" : fname},
			"type" : "POST",
			"success":(dataFromPHP)=>{
				// alert(data);
			if(dataFromPHP){
				$("#error_fname").css('color', 'red');
				$("#error_fname").html("The First Name Field is required!")
			}
			else{
				$("#error_fname").html("");
			}
			}

	})