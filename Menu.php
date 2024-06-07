<?php
     class Menu {
        private $titulo;
        private $opciones;

        public function __construct($titulo){
            $this->titulo=$titulo;
        }
        
        public function addOpcion($valor,$descripcion){
            $this->opciones[]=[$valor,$descripcion];
        }

        public function elegir(){
            echo $this->titulo."\n";
            echo("===============\n");

            foreach($this->opciones as $opcion) {
                echo "\033[31m";
                echo $opcion[0];
                echo "\033[0m";

                echo "-";
                echo $opcion[1];
                echo "\n";  
            }

            echo ("Ingrese opcion: ");
            $opcion=fgets(STDIN);
            echo ("\n");

            return $opcion;
        }

        static function getMenuSistema(){
            $menu=new Menu("Sistema médico");

            $menu->addOpcion(0,"Salir");
            $menu->addOpcion(1,"Ingreso médico");
            $menu->addOpcion(2,"Ingreso paciente");
        }

        static function getMenuMedico(){
            $menu= new Menu("Médico");

            $menu->addOpcion(0,"Volver");
            $menu->addOpcion(1,"Agregar consulta");
            $menu->addOpcion(2,"Obtener historial médico");
        }

        static function getMenuPaciente(){
            $menu=new Menu("Paciente");

            $menu->addOpcion(0,"Volver");
            $menu->addOpcion(1,"Agendar consulta");
            $menu->addOpcion(2,"Eliminar consulta");
        }
     }