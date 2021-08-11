<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="Vista/css/estilos.css"></link>
    <script src="Vista/js/funcion.js"></script>
    <link rel="shotcut icon" type="image/jpg" href="Vista/Logo/logo.png">
    <title>MVC</title>
</head>
<body>
    <header>
        <h1>Proyecto EVN304</h1>
    </header>
    <nav id="menuPrincipal">
        <a  class="opcionMenu" href="?peticion=home">Home</a>
        <a class="opcionMenu"  href="?peticion=somos">Quienes Somos</a>
        <a class="opcionMenu" href="?peticion=galeria">Galeria</a>
        <a class="opcionMenu" href="?peticion=IniciarSesion">Inicio de Sesión</a>
    </nav>
    <section>
        <h2>Login</h2>
        <img src="Vista/Logo/logo.png" alt="Logo">
        <form method="post" action="">
            <input type="email" name="correo" placeholder="Introduce tu correo"></input>
            <input type="password" name="contrasena" id="pass" placeholder="Introduce tu contraseña"></input>
            <input type="hidden" name="peticion" value="ingresar">

            <input type="submit" onclick="encriptar()"  value="Ingresar">
        </form>
        <p>
            <!--Validacion de usuario registrado-->
            
        </p>   
        <a href="?peticion=registroUsuario" class="opcion">Registrate</a> 
    </section>
    
</body>
</html>