<style>
h3 {
	text-align: center;
	font-size: 30px;
	font-family:Lucida Sans Unicode;
}
p {
	font-size: 20px;
	font-weight: bold;
	text-decoration: underline;

}
director{
	font-size: 20px;
	font-weight: bold;
	text-align: left;
}
administrador{
	font-size: 20px;
	font-weight: bold;
	text-align: right;
}
table, th, td {
    
    font-size: 18px;
}
th {
    padding: 5px;
    text-align: left;
    background-color: #940616;

}
td {
    padding: 5px;
    text-align: center;

    
}

table#forma {
    width: 100%;    
    
    
}
membrete{
	font-size: 25px;
	font-weight: bold;
	text-decoration: none;
}
</style>
	<membrete>
		San Juan de los Morros<br>
		Alcaldia del Estado Guarico<br>
		Fondo Para El Desarrollo Integral del Municipio Roscio
	</membrete>
	
	<br><br><br><br><br>
	<h3>Constancia de Solicitud</h3>
	<br><br><br><br>
	<p> Datos del Solicitante: </p>
	<br><br>
		<table id="forma" border="1">
			<tr >

				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Municipio</th>
				<th>Parroquia</th>
				<th>Telefono</th>
				<th>Direccion</th>
				<th>Recepcion</th>


				
			</tr>
			<tr>
					<td> <?php echo ($documento['Solvencia']['cedula']); ?>
				     </td>

				     <td> <?php echo ($documento['Documento']['nombre']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['apellidos']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['municipio']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['parroquia']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['telefono']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['direccion']); ?>
				     </td>
				     <td> <?php echo ($documento['Documento']['created']); ?>
				     </td>

			</tr>
		</table>
<br><br><br><br><br>

<table border="0" cellspacing="29" style="width:100%" align="center" >
		<tr> 
				<td>
				<director>	
				       _______________ <br><br>
					  Marisela Torrealba <br>
					  C.I 10.672.449<br>
					    Presidenta
				</director>
				</td>
				<td>
					
				</td>
				<td>
				<administrador>	
					  _______________ <br><br>
					  Betania Jimenez <br>
						C.I 14.642.648<br>
					    Administradora
				</administradora>
				</td>
		</tr>
</table>

