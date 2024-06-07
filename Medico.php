<?php
    class Medico extends Persona {
        private $especialidad;
        private $matricula;

        public function __construct($nombre,$apellido,$dni,$especialidad,$matricula){
            parent ::__construct($nombre,$apellido,$dni);
            $this->especialidad=$especialidad;
            $this->matricula=$matricula;
        }

        public function getEspecialidad (){
           return $this->especialidad;
        }

        public function getMatricula (){
            return $this->matricula;
        }

        public function ingresarDatosHistorial(){
        // quiero ingresar el dni de un paciente, su tratamiento y diagnostico, y que me lo guarde como un array y lo imprima en la pantalla.
        //pedir los datos al usuario
        echo ("Ingrese el DNI del paciente: \n");
        $paciente=trim(fgets(STDIN)); // aca deberia buscar en la base de datos al paciente e ingresar los datos que se igresen aca en el array de hisorial medico
        echo("Ingrese el tratamiento: \n");
        $tratamiento=trim(fgets(STDIN));  //estaria bueno que luego haga la funcion que hizo el profe para normalizar el hecho de guardar datos sin el 0
        echo("Ingrese el diagnostico: \n");
        $diagnostico=trim(fgets(STDIN));
        
        //1ero creo un array asociativo para almacenar los datos
        $datos=array(
        'paciente'=>$paciente,
        'tratamiento'=>$tratamiento,
        'diagnostico'=>$diagnostico
        );
        //imprimirlo en pantalla
         echo ("\n");
          print_r($datos);
          echo ("\n");
          //Me falta que estos datos se agreguen al objeto que tendria en una base de datos, se podra?
        }

        public function verHistorialMedico($paciente){
        //una funcion que pida ingresar el dni del paciente, y muestre el historial medico de este
        }

        public function verConsulta($motivo,$fecha){
        //una funcion que pida el dni del paciente y muestre el motivo y fecha de la consulta
        }
    }