<div id="general">
	
	<center>
	<?php echo $this->element('barnner');?>
		<br><br><br>
	<h2> Edicion de Usuario</h2>
	<br><br>
	<div  class="col-lg-6">
					<div class="bloque">
						<?php echo $this->Form->create('User'); ?>
							<fieldset>
						
							<?php
								
								echo $this->Form->input('id');
								
								
								
								/*echo $this->Form->input('group_id', array('class'=>'form-control'));*/
								echo $this->Form->input('username', array('class'=>'form-control'));
								echo $this->Form->input('password', array('class'=>'form-control'));
								echo $this->Form->input('nombre', array('class'=>'form-control'));
								echo $this->Form->input('apellido', array('class'=>'form-control'));
								echo $this->Form->input('dni', array('class'=>'form-control','type'=>'text'));
								echo $this->Form->input('email', array('class'=>'form-control'));
							?>
							</fieldset>
							<br>
						<center>
							<input type="submit" value="Actualizar" class="button float-shadow">
						<center>
					</div>
					<br>
	</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-default'), array('class' => 'btn btn-default')); ?></li>
		<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-default')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-default')); ?>
	</div>
</div>
