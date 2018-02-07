$("#create-task").submit(function( event ) {
	var data = $(this).serializeArray();
	dataString = JSON.stringify(data);

	console.log(data);
	console.log(dataString);
	
  	event.preventDefault();
});

