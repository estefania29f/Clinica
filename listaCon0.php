<?php
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   $resultado=mysqli_query($conexion, "SELECT * FROM consultas") or
           die("Problemas en el select:".mysqli_error($conexion));
   
   echo "<br><br><br><br>";
   echo "<center>";
   echo "<font color='blue'>";
   echo "<h1> Doctores </h1>";
   echo "<h2>Consultas</h2><br>";
   echo "</font >";
   echo "<table border=1 >";
   echo "<TR>";
   echo " <TH> No. de consulta </TH> <TH> Fecha </TH>  <TH> id Paciente </TH><TH> id Doctor </TH>  <TH> costo </TH> ";
   echo "</TR>";
   // debemos de recorrerlo todo asignandolo a una variable
   while($row=mysqli_fetch_array($resultado))
   { 
		echo "<TR>";
		echo "<TD>";  printf("%d",   $row["numCon"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["fechaCon"]);     echo "</TD>";
		echo "<TD>";  printf("%d",   $row["idPac"]);     echo "</TD>";
		echo "<TD>";  printf("%d",   $row["idDoc"]);     echo "</TD>";
		echo "<TD>";  printf("$  %.2f",   $row["costoEsp"]);     echo "</TD>";
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





