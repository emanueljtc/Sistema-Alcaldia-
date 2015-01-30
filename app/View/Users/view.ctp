<div id="general">
<center><br><br><br><br>
<h2><?php echo __('Edici&oacuten de Usuario'); ?></h2>
		<br><br>
	<div class="col-lg-12">
		<div class="bloque"> 
			
			<table class="table table-striped table-hover">
			
			
				<br>
				<tbody>
					<tr class="success">
						<td>Grupo</td>
						<td>Username</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Cedula</td>
						<td>Email</td>
						<td>Modificado</td>
					</tr>
					
					<tr>
						
						
						<td><?php echo h($user['Group']['name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
					
						<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
						
					</tr>
			    
				</tbody>
			</table>
		</div>
		<br>
	</div>
	
	<div class="btn-group btn-group-justified">
	
		
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?></li>
		<?php echo $this->Html->link(__('Lista de Usuarios'), array( 'action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

	
	</div>

</div>