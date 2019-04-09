<h3><img src="<?=BASE_URL; ?>icons/user.png" width="35" height="35" alt=""> Novo Contato</h3>

<form action="<?php echo BASE_URL;?>contact/addcontact" method="POST" class="form">
	<div class="form-group">
		<label for="name">Nome</label>
		<input type="text" name="name" class="form-control" autocomplete="off" autofocus="">
	</div>
	<div class="form-group">
		<label for="email">email</label>
		<input type="text" name="email" class="form-control" autocomplete="off">
	</div>
	<div class="form-group">
		<input type="submit" value="Salvar" class="btn btn-success">
	</div>
</form>