$(document).ready(function() {
		
	$('.compose').click(function(e){
		e.preventDefault();
	   $.get('compose',function(data){
			$('#compose').modal('show')
				 .find('#composeContent')
				 .html(data);
	});
	});


});



