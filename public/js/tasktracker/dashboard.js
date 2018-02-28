$("#create-task").submit(function( event ) {
	event.preventDefault();
	  $.ajax( {
      type: "POST",
      url: 'task/create',
      data: $('#create-task').serialize(),
      success: function( response ) {
      	console.log(response);
      	if (response.messageType == 'error') {
      		$('#create-task-alert').addClass("alert-danger");
      		$('#create-task-alert').removeClass("hidden");
      		$('#create-task-message').text(response.message);
      	}
        else if (response.messageType == 'success') {
        	$('#create-task-alert').addClass("alert-danger");
        	$('#create-task-alert').removeClass("hidden");
      		$('#create-task-message').text(response.message);
        }
      }
	});
  	
});

$(".repeatable").change(function( event ) {
  isRepeatable = $("input[name='repeatable']:checked").val();
  if (isRepeatable==="true") {
    $("#repeatableOptions").removeClass("hidden");
    $("#datepicker").addClass("hidden");
  } else {
    $("#datepicker").removeClass("hidden");
    $("#repeatableOptions").addClass("hidden");
  }
});

/* Create/Edit a Task
Both actions display the same page/modal
Edit sction will prepopulate the page with details for that task
Create action will show page with no options selected
Options:
* Task Name
* One-time or recurring radio buttons/toggle
* If one-time, then a date picker will be displayed to select date from
* If recurring, then radio button group with these options:
   * Daily
   * Weekly
      * Will show Checkboxes of each weekday to select
   * Monthly
      * Number dropdown (1-31) to pick the date also
      * Week dropdown with 1st, 2nd, 3rd, 4th and Weekday dropdown
* Submit button
* Cancel button


Submitting changes will update an existing task or create a new task. It will also create or update the events associated with that task.
*/