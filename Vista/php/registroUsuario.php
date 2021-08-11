<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="Vista/css/estilos.css"></link>
    <script src="Vista/js/funciones.js"></script>
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
    <h2>Introduce tus Datos</h2>
    <img src="Vista/Logo/logo.png" alt="Logo">
    <form method="post" action="" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Introduce tu nombre">
        <input type="email" name="correo" placeholder="Introduce tu correo">
        <input type="password"  id="pass" name="contrasena" placeholder="Introduce tu contraseña">
        <label>Seleccione una foto</label>
        <input type="file" name="foto">
        <input type="hidden" name="peticion" value="guardarUsuario">

        <input type="submit" onclick="encriptar()" value="Guardar">        
    </form>
        <p>
            <?php            
                if(isset($nombre)){
                    if($datos)
                        echo 'El registro se realizó correctamente';
                    else
                    echo 'No se realizo el registro de manera correcta';
                }

            ?>

        </p>
    </section>

    </body>
</html>

