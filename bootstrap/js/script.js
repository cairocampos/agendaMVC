$(function(){
	$('a').bind("click", function(e){
		e.preventDefault();
		var link = $(this).attr('href');
		
		$('#modalshow').modal('show');
		
		$.ajax({
			url: link,
			type:"POST",
			success:function(html){
				$('.modal-body').html(html);
			}
		});	
		

	});
});