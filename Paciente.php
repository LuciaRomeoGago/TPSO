<?php

require_once('Agenda.php');

    class Paciente extends Persona {
        private $consultas = array();


        public function __construct($nombre,$apellido,$dni){
            parent::__construct($nombre,$apellido,$dni);
        }
        
        public function agendarTurno() {
            //quiero que se le pida una fecha y un motivo, estos sean guardados en un objeto json de cada paciente, y que se muestre tambien
            echo ("Ingrese la especialidad: \n");
            $especialidad=trim(fgets(STDIN));
            echo ("Ingrese el medico con el que desea atenderse: ");
            $medico=trim(fgets(STDIN)); //estaria bueno poner un if que dependiendo especialidad le de la opcion de con que medicos atenderse, sacandolos de la base de datos. 
            echo ("Ingrese la fecha de su proxima consulta: \n");
            $fecha=trim(fgets(STDIN));
            echo ("Ingrese el motivo de la consulta: \n");
            $motivo=trim(fgets(STDIN));

            //nuevamente convierte los datos en un array
            $datos=array(
            'Ha agendado su turno de'=>$especialidad,
            'Con el medico: '=>$medico,
            'Su turno fue agendado con fecha en'=>$fecha,
            'Y con el motivo de'=>$motivo,
            );
            
            //y los imprime en pantalla
            echo ("\n");
            print_r($datos);
            echo ("\n");
            //claramente me falta toda la logica de guardar los datos en c/paciente como objetojson
        }
        
        public function verHistorialMedico(){
        //funcion que pida su dni y muestre todo su historial medico
        }

        public function eliminarTurno(){
        //funcion que pida dni, y busque en su BdD sus consultas, e elimine la ultima, supongo que con un array.pop 
        }

        /*private function ingresarPaciente(){
            echo ("Ingresar paciente\n");
            echo ("==================\n");
            echo ("Ingrese su nombre, genero, edad y telefono \n");
    
            $nombre = trim(fgets(STDIN));
            $genero=trim(fgets(STDIN));
            $edad=trim(fgets(STDIN));
            $telefono=trim(fgets(STDIN));
    
            $persona = new Paciente($nombre, $genero,$edad,$telefono);
    
            $this->pacientes[]=$persona;
    
            echo "Persona ingresada exitosamente.\n";
          }*/
    }