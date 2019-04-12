$('.carregar').hide();
window.onload = function(){
	var name = '';
	

	/*
	*Função: Verifica se existe contato via ajax;
	*Busca na base de dados o nome do contato que o usuário deseja.
	*/

	$.ajax({
		url: 'http://localhost/crudmvc/home/ajaxFilter',
		type: 'GET',
		data: {name:name},
		dataType: 'json',
		beforeSend:function(){
			$('.carregar').show();
		},
		success:function(json){
			$('.carregar').hide();
			var td = '';
			if (json.length > 0) {
				for(var x=0;x<json.length;x++) {
					td += '<tr><td>'+json[x].id+'</td><td>'+json[x].name+'</td><td>'+json[x].email+'</td><td><a href="javascript:void(0)" class="action" onclick="action(this);" data-link="http://localhost/crudmvc/home/edit/'+json[x].id+'"><img src="icons/edit.png" width="30"></a> - <a class="action" href="javascript:void(0)" onclick="deletar(this);" data-id="'+json[x].id+'"><img src="icons/delete-button.png" width="30"></a></td></tr>';					
				}

				$('#mytable').find('tbody').html(td);		
		
			} else {
				$('#message').show();
			}
		}
	});


	$('#contact').bind('keyup', function(){

		var name = $('#contact').val();
		
		if (name.length >= 0) {

			$.ajax({
				url: 'http://localhost/crudmvc/home/ajaxFilter',
				type: 'GET',
				data: {name:name},
				dataType: 'json',
				beforeSend:function(){
					$('.carregar').show();
				},
				success:function(json){
					$('.carregar').hide();
					var td = '';
					if (json.length > 0) {
					for(var x=0;x<json.length;x++) {
						td += '<tr><td>'+json[x].id+'</td><td>'+json[x].name+'</td><td>'+json[x].email+'</td><td><a href="javascript:void(0)" class="action" onclick="action(this);" data-link="http://localhost/crudmvc/home/edit/'+json[x].id+'"><img src="icons/edit.png" width="30"></a> - <a class="action" href="javascript:void(0)" onclick="deletar(this);" data-id="'+json[x].id+'"><img src="icons/delete-button.png" width="30"></a></td></tr>';					
					}

						$('#mytable').find('tbody').html(td);

					} else {
						$('#message').show();
					}		
								
				}
			})
		}

	});
}

function action(obj) {
	var link = $(obj).attr('data-link');
	console.log(link);

	$('#modalshow').modal('show');

	$.ajax({
		url: link,
		type:"POST",
		success:function(html){
			$('.modal-body').html(html);
		}
	});	
}

$('#update').bind('click', function(e){
	e.preventDefault();
	location.href =  location.href;
})


function deletar(obj) {
	var id = $(obj).attr('data-id');

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
	
}
