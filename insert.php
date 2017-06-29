<?php  
 $connect = mysqli_connect('localhost', 'id1969859_carlos1', '12345', 'id1969859_registration');  
 $sql = "INSERT INTO pendientes(tarea, estatus, fecha, fechaf, responsable) VALUES('".$_POST["tarea"]."', '".$_POST["estatus"]."',  
 '".$_POST["fecha"]."', '".$_POST["fechaf"]."', '".$_POST["responsable"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Inserted';  
 }  
 ?>
