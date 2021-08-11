<?php
//Controldor base
$peticion = 'home';
extract($_REQUEST);
//agregar la clase sesion
require_once 'Helper/Cls_Sesion.php';
$objSesion = new Sesion();
//validar el usuario de la sesion
if(!isset($_SESSION['usuario'])){   
    switch($peticion){
        case 'home': 
            require_once 'Vista/php/home.php';
        break;
        case 'somos': 
            require_once 'Vista/php/somos.php';
        break;
        case 'galeria': 
            require_once 'Vista/php/galeria.php';
        break;
        case 'IniciarSesion': 
            require_once 'Vista/php/login.php';
        break;
        case 'registroUsuario': 
            require_once 'Vista/php/RegistroUsuario.php';
        break;
        case 'guardarUsuario': 
            require_once 'Modelo/Cls_usuarios.php';
            $objUsuario= new Usuario();
            $objUsuario->setDatos($correo,$nombre,$contrasena,$_FILES);
            $datos=$objUsuario->insertarUsuarios();
            require_once 'Vista/php/RegistroUsuario.php';
            break;
        case 'ingresar':   
            require_once 'Modelo/Cls_usuarios.php';
            $objUsuario = new Usuario();
            $objUsuario->setDatos($correo,null,$contrasena,null);
            $datos = $objUsuario->login();
            //dispara el metodo para crear variable de sesión

            $objSesion->crearVariable('usuario',$datos);
            if(isset($datos['perfil'])){
                $objSesion->crearVariable('usuario' ,$datos);
            //.......crear una variable de sesión para el usuario

                if($datos['perfil']==2)
                    header('location:?peticion=perfilCliente');                    
                    else
                       header('location:?peticion=perfilAdmin');          
            }
            require_once 'Vista/php/login.php';
            break;

        default:
        header('location:Vista/php/home.php');
    }
}  
    //Validar el acceso al Perfil 1= Administrador
    //requerimos de una variable de sesion
    //sección del backend donde ya hay una sesion  creada para el Administrador

    if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] == 1){
        switch($peticion){
            case 'perfilAdmin':
            require_once 'Vista/php/indexAdmin.php';

            break; 
            case 'registroProductos':
            
            break;
            case 'guardarProducto':

            break;
            //falta cerrar sesion
            case 'cerrar':
            $objSesion->borrarVariable('usuario');
            require_once 'Vista/php/login.php';    
            break;   
            //falta el default
            default:
            header('location:?peticion=perfilAdmin');    
   
    }
}
//Validación para el perfil 2, cliente
if(isset($_SESSION['usuario']) && $_SESSION['usuario']['perfil'] ==2){
    switch($peticion){
        case 'perfilCliente':
            require_once 'Vista/php/indexCliente.php';
            break;
            case 'galeria':

                break;
        case 'cerrar':
            $objSesion->borrarVariable('usuario');
            require_once 'Vista/php/login.php'; 
        break;    
    }
}

?>