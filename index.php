<?php
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'conexion.php';
	}else{
		echo "Error en el sistema";
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web Omar Jaramillo</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="css/curso.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>
<center>
    <header>





       <br>

       <center>
           <h1>Bienvenido: <?php echo $_SESSION['nombre']?></h1>
           <h1 class="titulop">Plataforma Susalud </h1>
           <br>
           <br>
           <br>
           <br>
           <a class="vinculom"href="#">Inicio</a>
           <br>
           <br>
            <a class="vinculom"href="login.php"> Login</a>
           <br>
           <br>
            <a class="vinculom"href="Registro.php">Registro</a>
           <br>
           <br>
            <a class="vinculom"href="autoevaluacion.php">Autoevaluacion</a>
           <br>
           <br>
           <a class="vinculom"href="autodeclaraciones.php">Autodeclaraciones</a>



        </center>





   </header>
    <div class="descripcion">
                    <h3 class="vinculo"></h3>
                    <div class="parrafo">
                    <p></p>
                    </div>

                    <h3 class="vinculo"></h3>
                    <div class="parrafo">
                    <p></p>
                     </div>

                    <h2 class="titulo1"></h2>




                        <h3 class="vinculo" ></h3>
                        <div class="parrafo">
                        <p></p>
                        </div>
                    <h3 class="vinculo"></h3>
                    <div class="parrafo">
                        <p></p>
                     </div>




    </div>
    <main>





        <h1>Bienvenido </h1>








      </main>













       <h2 class="titulo-final">&copy; Omar Jaramillo  UNIMINUTO</h2>
       <h2 class="titulo-final">&copy; Michael Beltran UNIMINUTO</h2>
       <h2 class="titulo-final">&copy; Diana Fonseca  UNIMINUTO</h2>
       <h2 class="titulo-final">&copy; Danilo Santos  UNIMINUTO</h2>
     </center>

</body>
<footer>


</footer>


</html>
