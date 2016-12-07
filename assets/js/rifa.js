$(document).on('click', '#card', function(event) {
	event.preventDefault();
	/* Act on the event */
	$(this).addClass('flipped');
});

$(document).on('click','.panel-body', function(event) {
	event.preventDefault();
	
	$(this).addClass('panel-body-hover');
});

$(document).on('click', "button[name='idregalo[]']", function(event) {
	event.preventDefault();
	/* Act on the event */
	var id=$(this).val();
	var ganador=$(this).parent().parent().find("input[name='ganador[]']").val();
	
	if(ganador.length!=0)
	{
		$.ajax({
			url: 'regalo/edit',
			type: 'post',
			dataType: 'json',
			data: {id:id,ganador:ganador},
		})
		.done(function(data) {
			console.log("success");
			console.log(data);
			if(data.status==200)
			{
				$("input[id='"+data.id+"']").prop("disabled","disable");
			}
		})
		.fail(function(error) {
			console.log("error");
			console.log(error.responseText);
		})
		.always(function() {
			console.log("complete");
		});
		
	}

});