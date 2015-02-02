<div id="general">
<center>
<br>
<br>
<br>
<br>
<br>
<h2> Edicion de Grupo</h2>
<br><br>
	<div  class="col-lg-6">
					<div class="bloque">
					<?php echo $this->Form->create('Group'); ?>
						<fieldset>
					
						<?php
							
							
													
							echo $this->Form->input('name', array('class'=>'form-control','label'=>'Nombre del Grupo'));
							
					
						?>
						</fieldset>
						<br>
					<center>
						<input type="submit" value="Actualizar" class="button float-shadow">
					<center>
					</div>
	</div>
	<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?></li>
		<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
    </div>
</div>
