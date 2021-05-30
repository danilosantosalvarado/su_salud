<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">
        <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <center>
    <div class="fondoacceso">
      <h1 Class="titulomas">INGRESA TUS DATOS</h1>
      <form method="POST" action="accesoproceso.php">
        <label >Usuario: </label>
        <input type="text" name="txtUsu">
        <br>
        <label >Password: </label>
        <input type="password" name="txtPass">
        <br>
        <input type="submit" value="Iniciar sesión">
      </form>
      <a class="titulomas"href="passwordrecover.php">Recuperar Password</a>
      <a class="titulomas" href="index.php">Inicio</a>
    </div>
  </center>
</body>
</html>
