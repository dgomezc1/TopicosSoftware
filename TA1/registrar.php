<?php 
include("conexion_db.php");
$conex = conexion();
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $consulta = "INSERT INTO datos(nombre, email) VALUES ('$name','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Datos registrados correctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Ha ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Por favor complete los campos</h3>
           <?php
    }
}
?>