<div id = general>
		<center>
		<?php echo $this->element('barnner');?>
		<br><br><br>
		
		<h2> Edicion de Solvencia</h2>
		<br><br>
		<div class="col-lg-6">
			<div class="bloque">
				<?php echo $this->Form->create('Solvencia'); ?>
					<fieldset>
						
					<?php
						echo $this->Form->input('id');
						echo $this->Form->input('instituciones_id',array('class'=>'form-control'));
						echo $this->Form->input('cedula', array('type'=>'integer','class'=>'form-control'));
						echo $this->Form->input('estado',array('label'=>'Estado','class'=>'form-control','type'=>'select','options'=>array('Solvente'=>'Solvente',' No Solvente'=>'No Solvente')));
					?>
					</fieldset>
						<br>
					<center>
						<input type="submit" value="Actualizar" class="button float-shadow">
					<center>
		
			</div>
			<br><br>
		</div>
		<div class="btn-group btn-group-justified">
	
	
		<?php echo $this->Html->link(__('Nueva Solvencia'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Solvencias'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
		</div>

</div>