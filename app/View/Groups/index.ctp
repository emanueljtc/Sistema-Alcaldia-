<div class="groups index">
	<?php echo $this->element('barnner');?>
	<div class="pager_header">
		<center>
		<br>
		<br>
		
		<h2><?php echo __('Lista de Grupos'); ?></h2>
		<br><br>
		</center>
		<br>
	</div>
	<center>
<div class="col-lg-12">

	<table class="table table-striped table-hover">
	
	<tr class="success">
			
			<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('V'), array('action' => 'view', $group['Group']['id']),array('class'=>'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('E'), array('action' => 'edit', $group['Group']['id']),array('class'=>'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<paginador><!-- etiqueta personalidad-->
		<?php echo $this->element('paginador');?>
	</paginador>
	<br>
</div>
<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?></li>
		<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>
