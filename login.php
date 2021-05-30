<!DOCTYPE html>
<html>
  <head>
    <title>Iniciar sesion</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/curso.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  </head>
  <body>
    <center>
      <div class="descripcion">
        <form method="POST" action="loginProceso.php">
          <div class="itens">
            <label>Usuario: </label>
            <input type="text" name="txtUsu">
          </div>
          <div class="itens">
            <label>Password: </label>
            <input type="password" name="txtPass">
          </div>
          <input type="submit" value="Iniciar sesión">
        </form>
        <a class="vinculo"href="index.php">Inicio</a>
      </div>
    </center>
  </body>
</html>
