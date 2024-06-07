<?php
    class HistorialMedico {
        private $consultas;
        private $tratamiento;
        private $diagnostico;

        public function __construct(){
            $this->consultas=[];
            $this->tratamiento=null;
            $this->diagnostico=null;
        }

        public function getConsultas(){
            return  $this->consultas;
        }

        public function getTratamiento(){
            return  $this->tratamiento;
        }

        public function getDiagnostico(){
            return  $this->diagnostico;
        }

        
    }