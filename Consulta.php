<?php
    class Consulta {
        private $fecha;
        private $motivo;

        public function __construct($fecha,$motivo){
            $this->fecha=$fecha;
            $this->motivo=$motivo;
        }

        public function mostrarConsulta (){
            echo "Fecha: ".  $this->fecha."\n";
            echo "Motivo: ". $this->motivo."\n";
            echo "--------------------\n";
        }
    }