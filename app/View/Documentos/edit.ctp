
<div id="general">
	<center>
	<br><br>
	<h2> Edici&oacuten de Recepci&oacuten</h2>
	<br><br>
	<div class="col-lg-6">
			<div class="bloque">
			 
				<?php echo $this->Form->create('Documento'); ?>
					<fieldset>
						
					<?php
						echo $this->Form->input('id',array('class'=>'form-control'));
						echo $this->Form->input('solvencia_id', array('class'=>'form-control'));
						echo $this->Form->input('nombre');
						echo $this->Form->input('apellidos');
						echo $this->Form->input('municipio',array('class'=>'form-control','type'=>'select','options'=>array('camaguan'=>'Camaguan','chaguaramas'=>'Chaguaramas','socorro'=>'El Socorro','infante'=>'Infante','mercedes'=>'Las Mercedes','mellado'=>'Mellado','miranda'=>'Miranda','monagas'=>'Monagas','ortiz'=>'Ortiz','ribas'=>'Ribas','roscio'=>'Roscio','guayabal'=>'San Geronimo de Guayabal','guaribe'=>'San Jose de Guaribe','ipire'=>'Santa Maria de Ipire','zaraza'=>'Zaraza')));
						echo $this->Form->input('parroquia',array('class'=>'form-control','type'=>'select','name="parroquia"','id="parroquiachg"','options'=>array('camaguan'=>' Camaguan','puerto miranda'=>' Puerto Miranda','uverito'=>' Uverito','chaguaramas'=>' Chaguaramas','socorro'=>' El Socorro','calvario'=>' El Calvario','rastro'=>' El Rastro','guardatinajas'=>'Guardatinajas','calabozo'=>'Calabozo','tucupido'=>'Tucupido','san rafael de laya'=>'San Rafael de Laya','lezama'=>'San Francisco Javier de Lezama','macaira'=>'Paso Real de Macaira','soublette'=>'Carlos Soublette','san francisco de macaira'=>'San Francisco de Macaira','orituco'=>'Libertad de Orituco','cantagallo'=>'Cantagallo','san juan de los morros'=>'San Juan de los Morros','parapara'=>'Parapara','el sombrero'=>'El Sombrero','sosa'=>'Sosa','las mercedes'=>'Las Mercedes','cabruta'=>'Cabruta','santa rita de manapire'=>'Santa Rita de Manapire','Valle la Pascua'=>'Valle la Pascua','Espino'=>'Espino','San Jose de Tiznados'=>'San Jose de Tiznados','San Francisco de Tiznados'=>'San Francisco de Tiznados','San Lorenzo de Tiznados','San Lorenzo de Tiznados'=>'San Lorenzo de Tiznados','ortiz'=>'Ortiz','San José de Unare'=>'San José de Unare','Zaraza'=>'Zaraza')));
						echo $this->Form->input('telefono',array('class'=>'form-control','type'=>'text'));
						echo $this->Form->input('direccion');
						echo $this->Form->input('copiacedula',array('label'=>'Copia de Cedula','class'=>'form-control','type'=>'select','options'=>array('consignado'=>'Consignado','pendiente'=>'Pendiente')));

						echo $this->Form->input('constancia_r',array('label'=>'Constancia de Residencia','class'=>'form-control','type'=>'select','options'=>array('consignado'=>'Consignado','pendiente'=>'Pendiente')));
						echo $this->Form->input('carta_m',array('label'=>'Carta de Motivos','class'=>'form-control','type'=>'select','options'=>array('consignado'=>'Consignado','pendiente'=>'Pendiente')));
						echo $this->Form->input('presupuesto',array('class'=>'form-control','type'=>'select','options'=>array('consignado'=>'Consignado','pendiente'=>'Pendiente')));
						echo $this->Form->input('carpeta',array('label'=>'Carpeta Marron','class'=>'form-control','type'=>'select','options'=>array('consignado'=>'Consignado','pendiente'=>'Pendiente')));
							?>
					</fieldset>
					    <br>
						<center>
							<input type="submit" value="Actualizar" class="button float-shadow">
						<center>
			</div>
	</div>
		<div class="btn-group btn-group-justified">
		
		
			<?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista de Documentos'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>
		
	</div>
</div>