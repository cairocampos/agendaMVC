<h3>Editar <img src="<?php echo BASE_URL;?>icons/edit.png" width="30" height="30" alt=""></h3>

<form action="<?php echo BASE_URL;?>home/edit_submit" class="form" method="POST">
	<input type="hidden" name="id" value="<?php echo $info["id"]; ?>">
	<div class="form-group">
		<label for="name">Nome</label>
		<input type="text" name="name" class="form-control" value="<?php echo $info["name"]; ?>">	
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" class="form-control" value="<?php echo $info["email"]; ?>">	
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-info" value="Editar">	
	</div>
</form>