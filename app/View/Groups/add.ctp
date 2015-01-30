<style type="text/css">
	 .avatar {
    width: 100px;
    height: 100px;
    margin: 10px auto 30px;
    border-radius: 100%;
    border: 2px solid #000;
    background-size: cover;
    background-image: url('../img/grupos.png');
   
  }

</style>
<?php echo $this->element('barnner-2');?>
<br><br><br>
<center><h2>Registro de Grupos</h2></center>
<br><br>
<center>
<div class="col-lg-6">
	<div class="bloque">
	<div class="avatar">
	</div>
	<?php echo $this->Form->create('Group'); ?>
		<fieldset>
			
		<?php
			echo $this->Form->input('name',array('label'=>'Nombre'));
		?>
		</fieldset>
			<br>
				
				<center>
				<input type="submit" value="Guardar" class="button float-shadow">
				</center>
			</div>
</div>

<div class="btn-group btn-group-justified">
	  
		<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?></li>
		<?php echo $this->Html->link(__('Lista Grupos'), array('controller' => 'groups', 'action' => 'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>

