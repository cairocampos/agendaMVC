<h1 class="mt-3"><img src="<?php echo BASE_URL; ?>icons/phone.png" width="50" height="50" alt=""> Minha Agenda</h1>
<div id="link-add">
	<div class="mr-auto" style="display: flex; align-items: center;">
		<div><?php echo "Contatos: ".'<span class="total">'.$registers.'</span>'; ?></div>
	</div>
	<a href="javascript:;" id="update" class="action newcontact btn btn-primary"><img src="<?php echo BASE_URL;?>icons/refresh.png" width="20" height="20" alt=""></a>

	<a href="javascript:void(0)" onclick="action(this);" data-link="<?php echo BASE_URL; ?>contact/insert" class="action newcontact btn btn-success">New <img src="<?php echo BASE_URL;?>icons/icon-plus.png" width="20" height="20" alt=""></a>
</div>
<hr>
<?php if(isset($success)): ?>
	<div class="alert alert-fade alert-success">
		<button class="close" data-dismiss="alert">&times;</button>
		<?php echo $success; ?>
	</div>
<?php elseif(isset($error)): ?>
	<div class="alert alert-fade alert-danger">
		<button class="close" data-dismiss="alert">&times;</button>
		<?php echo $error; ?>
	</div>
<?php endif; ?>
<form method="GET" class="form mb-3" id="form-like">
	<div class="form-row">
		<div class="col-1">
			<img src="<?php echo BASE_URL; ?>icons/loupe.png" width="35" height="35" alt="">
		</div>
		<div class="col-6" id="contact-width">
			<input type="text" name="contact" id="contact" placeholder="Pesquisar por um contato..." autocomplete="off">
			<div class="bar"></div>
		</div>
	</div>
</form>
<div id="box-table">
	<table class="table table-light table-hover table-bordered" id="mytable">
		<thead class="text-center thead-dark">
			<tr width="100%">
				<th>ID</th>
				<th>NOME</th>
				<th>EMAIL</th>
				<th>AÇÕES</th>
			</tr>
		</thead>

	<!-- 	BEFORE_SEND-AJAX -->
		<div class="carregar">Carregando...</div>
	<!-- 	BEFORE_SEND-AJAX -->
		
		<tbody class="text-center"></tbody>

	</table>
	<div class="alert alert-info" style="display: none;" id="message">
		Você não tem nenhum contato!
	</div>
</div>

<!-- MODAL -->
<div class="modal fade" id="modalshow">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-label="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div>
</div>
<!-- MODAL -->