<?php
    class Persona {
        private $nombre;
        private $apellido;
        private $dni;

        public function __construct($nombre,$apellido,$dni){   
            $this->nombre=$nombre; 
            $this->apellido=$apellido;
            $this->dni=$dni;
        }

        public function getNombreCompleto(){
        return $this->nombre . " " . $this->apellido;
        }

       public function getDni(){
        return $this->dni;
       }
       
    }