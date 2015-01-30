<div id="general">
	<center><br><br>
	<div class="col-lg-12">
				<br><br><br>
				<h2>Instituci&oacuten Detallada</h2>
				<br><br><br>
		<div class="bloque"> 
			
			<table class="table table-striped table-hover">
				
				
				<tbody>
					<tr class="success">

						<td>Apellido</td>
						<td>Encargado</td>
						<td>Creado</td>
						<td>Modificado</td>
					</tr>
					<tr>
						
						
						
						<td>
							<?php echo h($institucione['Institucione']['nombre']); ?>
							&nbsp;
						</td>
						
						<td>
							<?php echo h($institucione['Institucione']['encargado']); ?>
							&nbsp;
						</td>
						
						<td>
							<?php echo h($institucione['Institucione']['created']); ?>
							&nbsp;
						</td>
						
						<td>
							<?php echo h($institucione['Institucione']['modified']); ?>
							&nbsp;
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="btn-group btn-group-justified">
	
		<?php echo $this->Html->link(__('Nueva Institucion'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista Institucion'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
</div>
</div>