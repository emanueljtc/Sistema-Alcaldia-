<div class="general">
<center><br><br>
<h2><?php echo __('Estadisticas'); ?></h2>
	<br><br>
	<div class="col-lg-12">
		<div class="bloque">
			<img src="app/webroot/img/grafica.gif" alt="Alcadia del Estado Guárico" width="600" height="500">
			<br>
			<A HREF="http://localhost/Reporte/general/registros/index.htm">Estadistica Semestral</A>

			<A HREF="http://localhost/Reporte/general/registros-anual/index.htm">Estadistica Anual</A>

			<A HREF="http://localhost/Reporte/general/solvencias/index.htm">Estadistica Solvencia</A>
		</div>
	</div>	

	<div class="btn-group btn-group-justified">
	
	
		
		<?php echo $this->Html->link(__('Lista de Solvencias'), array('controller' => 'solvencias','action' => 'index'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Estadisticas'), array('controller' => 'estadisticas', 'action' => 'index'), array('class' => 'btn btn-info')); ?>
	</div>
</div>


