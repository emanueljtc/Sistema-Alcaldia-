<div class="general">
<center>
<?php echo $this->element('barnner');?>
<br><br><br>
<h2><?php echo __('Detalle de Solvencia'); ?></h2>
	<br><br>
	<div class="col-lg-12">
		<div class="bloque">
			<table class="table table-striped table-hover">
			<br>
			<tbody>
				<tr class="success">
						<td>Institucion</td>
						<td>Cedula</td>
						<td>Estado</td>
						<td>Fecha de Recepcion</td>
						
					</tr>
				<tr>
					
					<td>
						<?php echo h($solvencia['Instituciones']['nombre']); ?>
						&nbsp;
					</td>
					
					<td>
						<?php echo h($solvencia['Solvencia']['cedula']); ?>
						&nbsp;
					</td>
					
					<td>
						<?php echo h($solvencia['Solvencia']['estado']); ?>
						&nbsp;
					</td>
					
					<td>
						<?php echo h($solvencia['Solvencia']['created']); ?>
						&nbsp;
					</td>
					
				</tr>
			</tbody>
			</table>
		</div>
	</div>	

	<div class="btn-group btn-group-justified">
	
	
		<?php echo $this->Html->link(__('Nueva Solvencia'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Solvencias'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
		<!--<?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $solvencia['Solvencia']['id'].'.pdf' ),array('class' => 'btn btn-sm btn-primary')); ?>-->
	</div>
</div>


