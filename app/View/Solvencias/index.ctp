<div id= "general">
	<?php echo $this->element('barnner');?>
	<div class="page_header">
		<center>
		<br><br><br>
		<h2><?php echo __('Lista de Solvencias'); ?></h2>
		<br>
		</center>
		<br>
	</div>
	<center>
	<div class="col-lg-12">
		<div class="solvencias index">
			
			<table class="table table-striped table-hover">
			
			<tr class="success">
					
					<th><?php echo $this->Paginator->sort('instituciones_id'); ?></th>
					<th><?php echo $this->Paginator->sort('cedula'); ?></th>
					<th><?php echo $this->Paginator->sort('estado'); ?></th>
					<th><?php echo $this->Paginator->sort('created'); ?></th>
					<th><?php echo $this->Paginator->sort('modified'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			
			<tbody>
			<?php foreach ($solvencias as $solvencia): ?>
			<tr>
				
				<td>
					<?php echo h($solvencia['Instituciones']['nombre']); ?>&nbsp;
				</td>
				<td><?php echo h($solvencia['Solvencia']['cedula']); ?>&nbsp;</td>
				<td><?php echo h($solvencia['Solvencia']['estado']); ?>&nbsp;</td>
				<td><?php echo h($solvencia['Solvencia']['created']); ?>&nbsp;</td>
				<td><?php echo h($solvencia['Solvencia']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('V'), array('action' => 'view', $solvencia['Solvencia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('I'), array('action' => 'imprimir', $solvencia['Solvencia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('E'), array('action' => 'edit', $solvencia['Solvencia']['id']),array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $solvencia['Solvencia']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $solvencia['Solvencia']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
			</tbody>
			</table>
			
			<paginador><!-- etiqueta personalidad-->
		<?php echo $this->element('paginador');?>
	</paginador>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
	
	
		<?php echo $this->Html->link(__('Nueva Solvencia'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Solvencias'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
	</div>

</div>