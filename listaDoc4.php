<?php
	// Recuperar la variable del formulario   A  B   T 
	$statusDoc=$_POST['statusDoc'];
	// Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   
	// en una variable hacer la tabla virtual ( de la clave que andamos buscando)
	if ($statusDoc = 'A' ||$statusDoc = 'B' )
	{
	   $resultado=mysqli_query($conexion, "SELECT idDoc,nombreDoc,nombreEsp, statusDoc
		  							   FROM doctores
                                       INNER JOIN especialidades
 									   on especialidades.idEsp=doctores.idEsp
									   WHERE statusDoc='".$_POST['statusDoc']."'") or
           die("Problemas en el select:".mysqli_error($conexion));
	}
	echo "<br><br><br><br>";
   echo "<center>";
   echo "<font color='blue'>";
   echo "<h1> Doctores </h1>";
   echo "<h2>Lista de doctores</h2><br>";
   echo "</font >";
   echo "<table border=1 >";
   echo "<TR>";
   echo " <TH> Id </TH> <TH> Doctor </TH>  <TH> Especialidad </TH><TH> Estado</TH>";
   echo "</TR>";
   // debemos de recorrerlo todo asignandolo a una variable
   while($row=mysqli_fetch_array($resultado))
   { 
		echo "<TR>";
		echo "<TD>";  printf("%d",   $row["idDoc"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["nombreDoc"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["nombreEsp"]);     echo "</TD>";
		$estadoDoc= $row["statusDoc"];
		if ( $estadoDoc == 'A')
		{
		  $estado= 'Alta';
		}
		else
		{
			$estado= 'Baja';
		}
		echo "<TD>";  printf("  %s  ",   $estado);     echo "</TD>";
		echo "</TR>";	  
	} 
	// cuando termino de mostrarlos todos cierro la etiqueta table
	echo "</table>";
	echo "</center>";
	// cuando termino de mostrar limpiar la tabla virtual creada
	mysqli_free_result($resultado); 
	// cerrar la conexion a la base de datos
	mysqli_close($conexion);
?>



