<!DOCTYPE html>
<html>
<head>
	<title>Pagina de registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Regitro de usuario</h1>
    	<input type="text" name="name" placeholder="Ingrese nombre completo">
    	<input type="email" name="email" placeholder="Ingrese Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>