<h3><img src="<?=BASE_URL; ?>icons/user.png" width="35" height="35" alt=""> Novo Contato</h3>

<form action="<?php echo BASE_URL;?>" method="POST" class="form" id="formulario">
	<div class="form-group contact-width">
		<label for="name">Nome</label>
		<input type="text" name="name" class="contact ins" autocomplete="off" autofocus="">
		<div class="bar"></div>
	</div>
	<div class="form-group contact-width">
		<label for="email">Email</label>
		<input type="text" name="email" class="contact ins" autocomplete="off">
		<div class="bar"></div>
	</div>
	<div class="form-group">
		<input type="submit" value="Salvar" class="btn btn-success">
	</div>
</form>