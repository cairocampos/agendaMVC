<h1 class="mt-3"><img src="<?php echo BASE_URL; ?>icons/phone.png" width="50" height="50" alt=""> Minha Agenda</h1>
<div id="link-add">
	<a href="javascript:;" id="update" class="action newcontact"><img src="<?php echo BASE_URL;?>icons/refresh.png" width="20" height="20" alt=""></a>

	<a href="<?php echo BASE_URL; ?>contact/insert" class="action newcontact">New <img src="<?php echo BASE_URL;?>icons/icon-plus.png" width="20" height="20" alt=""></a>
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
<table class="table table-light table-hover">
	<thead class="text-center">
		<tr>
			<th>ID</th>
			<th>NOME</th>
			<th>EMAIL</th>
		</tr>
	</thead>
	<?php if(count($items) > 0): ?>
		<?php foreach($items as $item): ?>
			<tbody class="text-center">
				<tr>
					<td><?php echo $item["id"]; ?></td>
					<td><?php echo $item["name"]; ?></td>
					<td><?php echo $item["email"]; ?></td>
					<td style="display: flex; justify-content: space-around;">
						<a class="action" href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>"><img src="<?php echo BASE_URL; ?>icons/edit.png" width="30" height="30" alt=""></a>
						<a class="del" data-id="<?php echo $item['id']; ?>"><img src="<?php echo BASE_URL; ?>icons/delete-button.png" width="30" height="30" alt=""></a>
					</td>
				</tr>
			</tbody>
		<?php endforeach; ?>
	<?php else: ?>
		<div class="alert alert-primary">
			Você não tem nenhum contato no momento!
		</div>
	<?php endif; ?>
</table>

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