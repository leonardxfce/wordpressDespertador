



<?php

$link = mysqli_connect('67.211.212.227', 'desper95_wp70', ']879SP80)i') or die('No se pudo conectar: ' . mysqli_error());
mysqli_select_db($link,'desper95_wp70') or die('No se pudo seleccionar la base de datos');





    echo "Gracias pronto empezaras a recibir el Newsletter del despertador!";

        
	$query= "INSERT INTO newsletter VALUES(NULL,'".$_POST['nombre']."','".$_POST['correo']."',0)";
 





    
	
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());
mysqli_close($link);
    
?>