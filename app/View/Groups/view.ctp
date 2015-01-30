<div id="general">
<center><br><br><br><br>
<h2><?php echo __('Grupo'); ?></h2>
<br><br>
	<div class="col-lg-6">
		<div class="bloque"> 
		
		<table class="table table-striped table-hover">
		
	
		<tbody>
			<tr class="success">
				
				<td>Nombre</td>
				
				<td>Modificado</td>
			</tr>
			
			<tr>
				
				
				
				<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
				
			
				<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
				
			</tr>
	    
		</tbody>
	</table>
		</div>
		</div>
	</div>
<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?></li>
		<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>
