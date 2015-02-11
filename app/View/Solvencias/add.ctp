<?php echo $this->element('barnner-2');?>
<style type="text/css">
	 .avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #000;
    background-size: cover;
    background-image: url('../img/documento.png');
   
  }

</style>
<br><br><br>
<center><h2>Recepci&oacuten de Solvencias</h2></center>
<br><br>
<center>
<div class="col-lg-6">
	<div class="bloque">
	<div class="avatar">
		</div>
			<?php echo $this->Form->create('Solvencia'); ?>
				<fieldset>
					
				<?php
					echo $this->Form->input('instituciones_id', array('class'=>'form-control'));
					echo $this->Form->input('cedula', array('type'=>'integer','class'=>'form-control'));
					echo $this->Form->input('estado',array('label'=>'Estado','class'=>'form-control','type'=>'select','options'=>array('Solvente'=>'Solvente',' No Solvente'=>'No Solvente')));
				?>
				</fieldset>
				<br>
				
				<center>
				<input type="submit" value="Guardar" class="button float-shadow">
				<center>
			
	
			</div>		
	<div class="btn-group btn-group-justified">
	
	
		<?php echo $this->Html->link(__('Nueva Solvencia'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Solvencias'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
	</div>
</div>