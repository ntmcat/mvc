<?php
include_once("modelos/empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados{


    public function inicio(){

        
        $empleados = Empleado::consultar();
        

        include_once("vistas/empleados/inicio.php");
    }
    public function crear(){

        if($_POST){

            // Aqui va los datos leidos de los inputs y pasandolos a la funcion del insert 
           
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['input_apellidos'];
            $tipo_documento=$_POST['select_tipoDoc'];
            $documento=$_POST['input_num_doc'];
            $fecha=$_POST['input_fecha'];
            $correo=$_POST['input_correo'];
            $telefono=$_POST['input_telefono'];
            $usuario=$_POST['input_usuario'];
            $contraseña=$_POST['input_contraseña'];
            $contraseña_repeat=$_POST['input_contraseña_repeat'];
            $residencia=$_POST['select_doc'];
            Empleado::crear($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia);
        }
        include_once("vistas/empleados/crear.php");
    }
    public function editar(){

        if($_POST){
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['input_apellidos'];
            $tipo_documento=$_POST['select_tipoDoc'];
            $documento=$_POST['input_num_doc'];
            $fecha=$_POST['input_fecha'];
            $correo=$_POST['input_correo'];
            $telefono=$_POST['input_telefono'];
            $usuario=$_POST['input_usuario'];
            $contraseña=$_POST['input_contraseña'];
            $contraseña_repeat=$_POST['input_contraseña_repeat'];
            $residencia=$_POST['select_doc'];
            $id=$_POST['id'];

            Empleado::editar($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia,$id);

        }

        $id=$_GET['id'];
        
        $empleado=(Empleado::buscar($id));
        
        
        include_once("vistas/empleados/editar.php");

    }

    public function borrar(){
        

        $id=$_GET['id'];
        Empleado::borrar($id);

        header("Location:./?controlador=empleados&accion=inicio");
        

    }
}

?>