<?php
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
	// en una variable hacer la tabla virtual ( de lo que deseamos ver)
   $resultado=mysqli_query($conexion,"SELECT * FROM especialidades");
   echo "<br><br><br><br>";
   echo "<center>";
   echo "<font color='blue'>";
   echo "<h1> Especialidades </h1>";
   echo "<h2>Lista de precios</h2><br>";
   echo "</font >";
   echo "<table border=1 >";
   echo "<TR>";
   echo " <TH> Id </TH> <TH> Especialidad </TH>  <TH> Precio </TH>";
   echo "</TR>";
   // debemos de recorrerlo todo asignandolo a una variable
   while($row=mysqli_fetch_array($resultado))
   { 
		echo "<TR>";
		echo "<TD>";  printf("%d",   $row["idEsp"]);     echo "</TD>";
		echo "<TD>";  printf("%s",   $row["nombreEsp"]);     echo "</TD>";
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





