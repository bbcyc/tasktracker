$("#create-task").submit(function( event ) {
	event.preventDefault();
	  $.ajax( {
      type: "POST",
      url: 'task/create',
      data: $('#create-task').serialize(),
      success: function( response ) {
      	console.log(response);
      	if (response.messageType == 'error') {
      		$('create-task-alert').addClass("alert-danger");
      		$('create-task-alert').removeClass("hidden");
      	}
        
      }
	});
  	
});

