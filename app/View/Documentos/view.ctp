<div id="general">
<?php echo $this->element('barnner');?>
<br><br><br>
	<div class="col-lg-12">
	<h2><?php echo __('Documento Detallado'); ?></h2>
			<br><br>
		<div class="bloque">
			<br>
		<TABLE class="table table-striped table-hover">
		<TR>
			<TH class="success"><h5>Cedula </h5></TH>
			<TD class="success"><h5>Nombre</h5></TD> 
			<TH class="success"><h5>Apellidos</h5></TH> 
			<TD class="success"><h5>Municipio</h5></TD>
		</TR>
		<TR>
			<TD><?php echo h($documento['Solvencia']['cedula']); ?>
			&nbsp;</TD>
			<TD><?php echo h($documento['Documento']['nombre']); ?>
			&nbsp;</TD> 
			<TD><?php echo h($documento['Documento']['apellidos']); ?>
			&nbsp;</TD> 
			<TD><?php echo h($documento['Documento']['municipio']); ?>
			&nbsp;</TD>
		</TR>
		<TR>
			<TH class="success"><h5>Parroquia</h5></TH>
			<TD class="success"><h5>Telefono</h5>
			</TD> <TD class="success"><h5>Direccion</h5></TD> <TD class="success"><h5>Copia de Cedula</h5>
			</TD>
		</TR>
		<TR>
			<TD><?php echo h($documento['Documento']['parroquia']); ?>
			&nbsp;</TD>
			<TD><?php echo h($documento['Documento']['telefono']); ?>
			&nbsp;</TD> 
			<TD ><?php echo h($documento['Documento']['direccion']); ?>
			&nbsp;</TD> 
			<TD><?php echo h($documento['Documento']['copiacedula']); ?>
				&nbsp;</TD>
		</TR>
		<TR>
			<TH class="success"><h5>Constancia de Residencia</h5></TH>
			<TD class="success"><h5>Carta de Exposicion de Motivos</h5></TD> 
			<TD class="success"><h5>Presupuesto</h5></TD> 
			<TD class="success"><h5>Carpeta</h5></TD>
		</TR>
		<TR>
			<TD><?php echo h($documento['Documento']['constancia_r']); ?>
			&nbsp;</TD>
			<TD><?php echo h($documento['Documento']['carta_m']); ?>
			&nbsp;</TD> 
			<TD ><?php echo h($documento['Documento']['presupuesto']); ?>
			&nbsp;</TD> 
			<TD c><?php echo h($documento['Documento']['carpeta']); ?>
				&nbsp;</TD>
		</TR>
		<TR>
			<TH class="success"><h5></h5></TH> 
			<TD class="success"><center><h5>Fecha de Recepci&oacuten </h5></TD> 
			<TD class="success"><h5></h5></TD> 
			<TD class="success"><h5></h5></TD>
		</TR>
		<TR>
			<TD ></TD>
			<TD><center><?php echo h($documento['Documento']['created']); ?>
			&nbsp;</TD>
			<TD></TD>
			<TD></TD> 
		</TR>


		</TABLE>
		
		</div>
		
	
	<br> <br><br>
									
	</div>
	<div class="btn-group btn-group-justified">
		
		
			<?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Documentos'), array('actions'=>'index'), array('class' => 'btn btn-info')); ?>
		<?php echo $this->Html->link(__('Imprimir'), array('action' => 'view', $documento['Documento']['id'].'.pdf' ),array('class' => 'btn btn-sm btn-primary')); ?>
		
	</div>
</div>