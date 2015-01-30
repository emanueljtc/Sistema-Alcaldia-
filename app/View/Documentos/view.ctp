<div id="general">

<br><br><br><br>
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
		<!-- <table >
				<tr><br><h5>Cedula</h5><tr>
			<tr>
				<?php echo h($documento['Documento']['cedula']); ?>			&nbsp;
			</tr>		

		</table>
		
		<dt><h5>Nombre</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><h5>Apellido</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><h5>Municipio</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['municipio']); ?>
						&nbsp;
		</dd>
		<dt><h5>Parroquia</h5></dt>
		<dd>
		<?php echo h($documento['Documento']['parroquia']); ?>
			&nbsp;
		</dd>
		<dt><h5>Telefono</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['telefono']); ?>
				&nbsp;
		</dd>
		<dt><h5>Direccion</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['direccion']); ?>
				&nbsp;
		</dd>
		<dt><h5>Copia de Cedula</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['copiacedula']); ?>
				&nbsp;
		</dd>
		<dt><h5>Constancia de Residencia</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['constancia_r']); ?>
				&nbsp;
        </dd>
        <dt>
        <h5>Carta de Exposicion de Motivos</h5>
        </dt>
        <dd>
        	<?php echo h($documento['Documento']['carta_m']); ?>
				&nbsp;
		</dd>
		<dt><h5>Presupuesto</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['presupuesto']); ?>
				&nbsp;
		</dd>
		<dt><h5>Carpeta</h5></dt>
		<dd>
			<?php echo h($documento['Documento']['carpeta']); ?>
						&nbsp;
		</dd>
	</dl> -->
			<!-- <table class="">

				<br><br>
					<tr class="success">
						<td>Cedula</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Municipio</td>
						<td>Parroquia</td>
						<td>Telefono</td>
						<td>Direccion</td>
						<td>Copia de Cedula<td>
						<td>Constancia de Residencia</td>
						<td>Carta - Motivos</td>
						<td>Presupuesto</td>
						<td>Carpeta</td>
					</tr>

					<tr>
						<td><?php echo h($documento['Documento']['cedula']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['nombre']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['apellidos']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['municipio']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['parroquia']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['telefono']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['direccion']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['copiacedula']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['constancia_r']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['carta_m']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['presupuesto']); ?>
						&nbsp;</td>
						<td><?php echo h($documento['Documento']['carpeta']); ?>
						&nbsp;</td>
					</tr>


			</table> -->	
		</div>
		
	<A HREF="http://localhost/reporte.pdf">Imprimir</A>
	<br> <br><br>
									
	</div>
	<div class="btn-group btn-group-justified">
		
		
			<?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Documentos'), array('actions'=>'index'), array('class' => 'btn btn-info')); ?>
		
	</div>
</div>