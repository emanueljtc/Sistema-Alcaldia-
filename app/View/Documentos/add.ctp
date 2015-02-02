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
<script>
		function habilitar(value)
		{
			if(value=="Camaguán")
			{
				// habilitamos
				document.getElementById("parroquiacmg").hidden=false;
				document.getElementById("parroquiacmg").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiacmg").hidden=true;
			}
			if(value=="Chaguaramas")
			{
				// habilitamos
				document.getElementById("parroquiachg").hidden=false;
				document.getElementById("parroquiachg").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiachg").hidden=true;
			}

			if(value=="El Socorro")
			{
				// habilitamos
				document.getElementById("parroquiaels").hidden=false;
				document.getElementById("parroquiaels").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiaels").hidden=true;
			}
			if(value=="Infante")
			{
				// habilitamos
				document.getElementById("parroquiali").hidden=false;
				document.getElementById("parroquiali").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiali").hidden=true;
			}
			if(value=="Las Mercedes")
			{
				// habilitamos
				document.getElementById("parroquialmd").hidden=false;
				document.getElementById("parroquialmd").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquialmd").hidden=true;
			}
			if(value=="Mellado")
			{
				// habilitamos
				document.getElementById("parroquiamlld").hidden=false;
				document.getElementById("parroquiamlld").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiamlld").hidden=true;

			}
			if(value=="Miranda")
			{
				// habilitamos
				document.getElementById("parroquiafsm").hidden=false;
				document.getElementById("parroquiafsm").disabled=false;
				}else {
				// deshabilitamos
				document.getElementById("parroquiafsm").hidden=true;
			}
			if(value=="Monagas")
			{
				// habilitamos
				document.getElementById("parroquiajtm").hidden=false;
				document.getElementById("parroquiajtm").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiajtm").hidden=true;
			}
			if(value=="Ortiz")
			{
				// habilitamos
				document.getElementById("parroquiaotz").hidden=false;
				document.getElementById("parroquiaotz").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiaotz").hidden=true;
			}
			if(value=="Ribas")
			{
				// habilitamos
				document.getElementById("parroquiajfr").hidden=false;
				document.getElementById("parroquiajfr").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiajfr").hidden=true;
			}
			if(value=="Roscio")
			{
				// habilitamos
				document.getElementById("parroquiajgr").hidden=false;
				document.getElementById("parroquiajgr").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiajgr").hidden=true;
			}
			if(value=="San Gerónimo de Guayabal")
			{
				// habilitamos
				document.getElementById("parroquiasgg").hidden=false;
				document.getElementById("parroquiasgg").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiasgg").hidden=true;
			}
			if(value=="San José de Guaribe")
			{
				// habilitamos
				document.getElementById("parroquiasjg").hidden=false;
				document.getElementById("parroquiasjg").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiasjg").hidden=true;
			}
			if(value=="Santa María de Ipire")
			{
				// habilitamos
				document.getElementById("parroquiasmi").hidden=false;
				document.getElementById("parroquiasmi").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquismi").hidden=true;
			}
			if(value=="Zaraza")
			{
				// habilitamos
				document.getElementById("parroquiazrz").hidden=false;
				document.getElementById("parroquiazrz").disabled=false;
			}else {
				// deshabilitamos
				document.getElementById("parroquiazrz").hidden=true;
			}


		}
	</script>

<br><br><br>
<center><h2>Recepci&oacuten de Documentos</h2></center>
<br><br>
<center>
<div class="col-lg-6">
	<div class="bloque">
		<div class="avatar">
		</div>
		<?php echo $this->Form->create('Documento'); ?>
			<fieldset>

			<?php
				echo $this->Form->input('solvencia_id', array('class'=>'form-control'));
				echo $this->Form->input('nombre');
				echo $this->Form->input('apellidos');
				/*echo $this->Form->input('municipio',array('class'=>'form-control','type'=>'select','name="municipio"','id="municipio"','onchange="habilitar(this.value);"','options'=>array('camaguan'=>'Camaguan','chaguaramas'=>'Chaguaramas','socorro'=>'El Socorro','infante'=>'Infante','mercedes'=>'Las Mercedes','mellado'=>'Mellado','miranda'=>'Miranda','monagas'=>'Monagas','ortiz'=>'Ortiz','ribas'=>'Ribas','roscio'=>'Roscio','guayabal'=>'San Geronimo de Guayabal','guaribe'=>'San Jose de Guaribe','ipire'=>'Santa Maria de Ipire','zaraza'=>'Zaraza')));*/
				echo"<br>";


				echo "<select name='data[Documento][municipio]' id='municipio' onchange='habilitar(this.value)'>";
				echo "<option value='0'>Elige</option>";
				echo "<option value='Camaguán'>Camaguán</option>";
				echo "<option value='Chaguaramas'>Chaguaramas</option>";
				echo "<option value='El Socorro'>El Socorro</option>";
				echo "<option value='Infante'>Infante</option>";
				echo "<option value='Las Mercedes'>Las Mercedes</option>";
				echo "<option value='Mellado'>Mellado	</option>";
				echo "<option value='Miranda'>Miranda</option>";
				echo "<option value='Monagas'>Monagas	</option>";
				echo "<option value='Ortiz'>Ortiz	</option>";
				echo "<option value='Ribas'>Ribas	</option>";
				echo "<option value='Roscio'>Roscio</option>";
				echo "<option value='San Gerónimo de Guayabal'>San Gerónimo de Guayabal</option>";
				echo "<option value='San José de Guaribe'>San José de Guaribe	</option>";
				echo "<option value='Santa María de Ipire'>Santa María de Ipire	</option>";
				echo "<option value='Zaraza'>Zaraza</option>";
				echo "</select>";

				echo"<br>";
				echo "<select name='parroquia' id='parroquiacmg' hidden disabled='disabled'>";
				echo "<option value='Camaguán'>Parroquia Camaguán</option>";
				echo "<option value='Puerto Miranda'>Parroquia Puerto Miranda</option>";
				echo "<option value=''>Parroquia Uverito</option>";
				echo "</select>";
				/*echo $this->Form->input('parroquia',array('class'=>'form-control','type'=>'select','name="parroquia"','id="parroquiachg"','options'=>array('camaguan'=>' Camaguan','puerto miranda'=>' Puerto Miranda','uverito'=>' Uverito','chaguaramas'=>' Chaguaramas','socorro'=>' El Socorro','calvario'=>' El Calvario','rastro'=>' El Rastro','guardatinajas'=>'Guardatinajas','calabozo'=>'Calabozo','tucupido'=>'Tucupido','san rafael de laya'=>'San Rafael de Laya','lezama'=>'San Francisco Javier de Lezama','macaira'=>'Paso Real de Macaira','soublette'=>'Carlos Soublette','san francisco de macaira'=>'San Francisco de Macaira','orituco'=>'Libertad de Orituco','cantagallo'=>'Cantagallo','san juan de los morros'=>'San Juan de los Morros','parapara'=>'Parapara','el sombrero'=>'El Sombrero','sosa'=>'Sosa','las mercedes'=>'Las Mercedes','cabruta'=>'Cabruta','santa rita de manapire'=>'Santa Rita de Manapire','Valle la Pascua'=>'Valle la Pascua','Espino'=>'Espino','San Jose de Tiznados'=>'San Jose de Tiznados','San Francisco de Tiznados'=>'San Francisco de Tiznados','San Lorenzo de Tiznados','San Lorenzo de Tiznados'=>'San Lorenzo de Tiznados','ortiz'=>'Ortiz','San José de Unare'=>'San José de Unare','Zaraza'=>'Zaraza')));*/


				echo $this->Form->input('telefono', array('class'=>'form-control'));
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
			<input type="submit" value="Guardar" class="button float-shadow">
			<center>

	</div>
</div>
<div class="btn-group btn-group-justified">


		<?php echo $this->Html->link(__('Nuevo Documento'), array('action' => 'add'), array('class' => 'btn btn-danger')); ?>
		<?php echo $this->Html->link(__('Lista Documentos'), array('action' => 'index'), array('class' => 'btn btn-info')); ?>


</div>
