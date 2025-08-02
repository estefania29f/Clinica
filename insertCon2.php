
<?php
   // Recuperar datos del formulario
   $numCon=$_POST['numCon'];
   $fechaCon=$_POST['fechaCon'];
   $idPac=$_POST['idPac'];
   $idDoc=$_POST['idDoc'];
   $idDoc="";
   $idEsp=$_POST['idEsp'];   
   // Variables para la conexion
   $host="localhost";
   $user='root';
   $pass='';
   $dbNombre="clinicasanmiguel";
   // Hacer la conexion y probarla
   $conexion=mysqli_connect($host,$user,$pass,$dbNombre)or die ('Error en la conexion ');
   //Hacer una tabla virtual de la especialidad
   $resultado=mysqli_query($conexion,"SELECT * FROM especialidades where idEsp = $idEsp");
   //recuperar el costo
   while($row=mysqli_fetch_array($resultado))
   {
 	   $costoEsp=$row["costoEsp"];
   }
   /* Mostrar datos
   echo "No de consulta $numCon<br>";
   echo "Fecha consulta $fechaCon<br>";
   echo "Id paciente $idPac<br>";
   echo "Id especialidad $idEsp<br>";
   //echo "Id doctor $idDoc<br>";
   echo "Costo consulta $costoEsp";
   */
   // Insertar los datos en la consulta
  // mysqli_query($conexion,"INSERT INTO consultas(numCon,fechaCon,idPac,idDoc,costoEsp) 
   //  	                                VALUES ($numCon,'$fechaCon',$idPac,$idDoc,$costoEsp)");
										
   //Guardar los datos en la tabla
   mysqli_query($conexion,"INSERT INTO consultas(numCon,fechaCon,idPac,idDoc,costoEsp) 
                              VALUES ($numCon,'$fechaCon',$idPac,$idDoc,$costoEsp)");
		 
   mysqli_close($conexion);
   
   // mandar al programa principla.
   // ESTA LINEA ACTIVARLA HASTA QUE YA PROBAMOS EL PROGRAMA Y FUNCIONA BIEN.
   //header("Location:insertCon1.php"); 
?> 





