<div id="general">
	<center>
	
	<?php echo $this->element('barnner');?>
	<br>
	<br><br>
	<h2> Edicion de Institucion</h2>
	<br><br>
	<div  class="col-lg-6">
		<div class="bloque">
			
			<?php echo $this->Form->create('Institucione'); ?>
				<fieldset>
					
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('nombre',array('class'=>'form-control'));
					echo $this->Form->input('encargado',array('class'=>'form-control'));
				?>
				</fieldset>
				<br>
					<center>
						<input type="submit" value="Actualizar" class="button float-shadow">
					<center>
		
		</div>
	</div><br>
	<div class="btn-group btn-group-justified">
	
		<?php echo $this->Html->link(__('Nueva Institucion'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Instituciones'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
	</div>
</div>