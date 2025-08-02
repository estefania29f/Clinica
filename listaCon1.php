<?php
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   $resultado=mysqli_query($conexion, "SELECT numCon,fechaCon,nombrePac, nombreDoc , costoEsp
									   FROM consultas
                                       INNER JOIN pacientes
 									   on pacientes.idPac=consultas.idPac
									   INNER JOIN doctores
									   on doctores.idDoc=consultas.idDoc") or
           die("Problemas en el select:".mysqli_error($conexion));
   
   echo "<br><br><br><br>";
   echo "<center>";
   echo "<font color='blue'>";
   echo "<h1> Consultas </h1>";
   echo "</font >";
   echo "<table border=1 >";
   echo "<TR>";
   echo " <TH>No. consulta </TH> <TH> Fecha </TH>  <TH> Paciente </TH><TH>Doctor </TH><TH> Costo</TH>";
   echo "</TR>";
   // debemos de recorrerlo todo asignandolo a una variable
   while($row=mysqli_fetch_array($resultado))
   { 
		echo "<TR>";
		echo "<TD>";  printf("%d",   $row["numCon"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["fechaCon"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["nombrePac"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["nombreDoc"]);     echo "</TD>";
		echo "<TD>";  printf("$ %.2f",   $row["costoEsp"]);     echo "</TD>";
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





