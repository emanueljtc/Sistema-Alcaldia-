<div class="documentos index">
	<?php echo $this->element('barnner');?>
	<div class="page_header">
		<center>
		<br><br>
		<h2><?php echo __('Lista de Documentos'); ?></h2>
		<br><br>
		</center>
		<br>
	</div>
	<center>
	<div class="col-lg-12">
		<table class="table table-striped table-hover">
		
					<tr class="success">
						
						<th><?php echo $this->Paginator->sort('cedula'); ?>
						<th><?php echo $this->Paginator->sort('nombre'); ?></th>
						<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
						
						<th><?php echo $this->Paginator->sort('parroquia'); ?></th>
						<th><?php echo $this->Paginator->sort('telefono'); ?></th>
						<th><?php echo $this->Paginator->sort('direccion'); ?></th>
						
						<th class="actions"><?php echo __('Acciones'); ?></th>
					</tr>
				
				<tbody>
				<?php foreach ($documentos as $documento): ?>
				<tr>
					
					<td><?php echo h($documento['Solvencia']['cedula']); ?>&nbsp;</td>
					<td><?php echo h($documento['Documento']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($documento['Documento']['apellidos']); ?>&nbsp;</td>
					
					<td><?php echo h($documento['Documento']['parroquia']); ?>&nbsp;</td>
					<td><?php echo h($documento['Documento']['telefono']); ?>&nbsp;</td>
					<td><?php echo h($documento['Documento']['direccion']); ?>&nbsp;</td>
					
					<td class="actions">
						<?php echo $this->Html->link(__('V'), array('action' => 'view', $documento['Documento']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('I'), array('/reporte.pdf'),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('E'), array('action' => 'edit', $documento['Documento']['id']),array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('D'), array('action' => 'delete', $documento['Documento']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $documento['Documento']['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
					</tbody>
		</table>
	</div>
	
	
	</div>
	<paginador><!-- etiqueta personalidad-->
		<?php echo $this->element('paginador');?>
	</paginador>
</div>
<div class="btn-group btn-group-justified">
	
	
		<?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Documentos'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
</div>
