$(function(){
	$('a.action').bind("click", function(e){
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

$('#update').bind('click', function(e){
	e.preventDefault();
	location.href =  location.href;
})

$('.del').bind('click', function(e){
	e.preventDefault();
	var id = $(this).attr('data-id');

	swal({
		title: "Atenção!",
		text: "Você deseja excluir esse contato de sua lista ?",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
	if (willDelete) {
		swal("Para continuar é só clicar no botão!", {
			icon: "success",
		})
		.then((value) => {
			if (value) {
				location.href = 'http://localhost/crudmvc/contact/delete/'+id;
			}
		})

		} else {
		swal("Operação cancelada.");
		}
	});
});
