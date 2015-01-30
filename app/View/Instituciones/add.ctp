<style type="text/css">
	 .avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #000;
    background-size: cover;
    background-image: url('../img/institucion.png');
   
  }

</style>
<div class="general">
	<?php echo $this->element('barnner-2');?>
	<br><br>
	<center><h2>Registro de Instituciones</h2></center>
	<br><br>
	<center>
	<div class="col-lg-6">
		<div class="bloque">
			<div class="avatar">
			</div>
			<?php echo $this->Form->create('Institucione'); ?>
				<fieldset>
					
				<?php
					echo $this->Form->input('nombre', array('class'=>'form-control'));
					echo $this->Form->input('encargado', array('class'=>'form-control'));
				?>
				</fieldset>
				<br>
				
				<center>
				<input type="submit" value="Guardar" class="button float-shadow">
				<center>
			</div>
		</div>
		<br>
	</div>
	<div class="btn-group btn-group-justified">
	
		<?php echo $this->Html->link(__('Nueva Institucion'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Instituciones'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
	
	</div>
</div>	