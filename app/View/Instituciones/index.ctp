<div class="instituciones index">
	<?php echo $this->element('barnner');?>
	<div class="page_header">
	<br><br>
		<center><h2><?php echo __('Lista de Instituciones'); ?></h2></center>
		<br><br>
	</div>
<center>
	<div class="col-lg-12"> 
		<table class="table table-striped table-hover">
		
		<tr class="success">
				
				<th><?php echo $this->Paginator->sort('nombre'); ?></th>
				<th><?php echo $this->Paginator->sort('encargado'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		
		<tbody>
		<?php foreach ($instituciones as $institucione): ?>
		<tr>
			
			<td><?php echo h($institucione['Institucione']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($institucione['Institucione']['encargado']); ?>&nbsp;</td>
			<td><?php echo h($institucione['Institucione']['created']); ?>&nbsp;</td>
			<td><?php echo h($institucione['Institucione']['modified']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('V'), array('action' => 'view', $institucione['Institucione']['id']),array('class'=>'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('E'), array('action' => 'edit', $institucione['Institucione']['id']),array('class'=>'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $institucione['Institucione']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $institucione['Institucione']['id'])); ?>
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
	
<div class="btn-group btn-group-justified">
	
		<?php echo $this->Html->link(__('Nueva Institucion'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Instituciones'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
</div>
