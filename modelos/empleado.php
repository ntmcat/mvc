<?php

class Empleado{

    public $id;
    public $nombre;
    public $apellidos;
    public $tipo_documento;
    public $documento;
    public $fecha;
    public $correo;
    public $telefono;
    public $usuario;
    public $contraseña;
    public $contraseña_repeat;
    public  $residencia;

    //constructor para consultas

    public function __construct($id,$nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia){

        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->tipo_documento=$tipo_documento;
        $this->documento=$documento;
        $this->fecha=$fecha;
        $this->correo=$correo;
        $this->telefono=$telefono;
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
        $this->contraseña_repeat=$contraseña_repeat;
        $this->residencia=$residencia;



    }


    //Funcion para consultar
    public static function consultar(){
        $listaEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM empleados");

        foreach($sql->fetchALL() as $empleado){

            $listaEmpleados[] = new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellidos'],$empleado['tipo_documento'],$empleado['documento'],$empleado['fecha'],$empleado['correo'],$empleado['telefono'],$empleado['usuario'],$empleado['contraseña'],$empleado['contraseña_repeat'],$empleado['residencia']);
        }

        return $listaEmpleados;
    }





    // inserción de datos para solo nombre y correo 
    public static function crear($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("INSERT INTO empleados(nombre,apellidos,tipo_documento,documento,fecha,correo,telefono,usuario,contraseña,contraseña_repeat,	residencia) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia));
        
    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM empleados WHERE id=? ");
        $sql->execute(array($id));
    }

    public static function buscar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("SELECT * FROM empleados WHERE id=? ");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellidos'],$empleado['tipo_documento'],$empleado['documento'],$empleado['fecha'],$empleado['correo'],$empleado['telefono'],$empleado['usuario'],$empleado['contraseña'],$empleado['contraseña_repeat'],$empleado['residencia']);
    }
    public static function editar($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia,$id){

        $conexionBD=BD::crearInstancia();

        $sql= $conexionBD->prepare("UPDATE empleados SET nombre = ?,apellidos = ?,tipo_documento = ? ,documento = ?,fecha = ?,correo = ?,telefono  = ?,usuario = ?,contraseña = ?,contraseña_repeat = ?,residencia = ? WHERE id=? ");
        $sql->execute(array($nombre,$apellidos,$tipo_documento,$documento,$fecha,$correo,$telefono,$usuario,$contraseña,$contraseña_repeat,$residencia,$id));

    }
}

?>