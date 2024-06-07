<?php
require_once('Persona.php');
require_once('Medico.php');
require_once('Paciente.php');
require_once('HistorialMedico.php');

   /* $menu= Menu ::getMenuSistema();

    $persona1=new Persona ("Lucia", "femenino",23,2494497824);

    do{
        $opcion=$menu->elegir();

        switch ($opcion) {
            case 1: 
                $persona1->ingresoPaciente();
                break;
            case 2: 
                $persona1->ingresoMedico();
                break;
        } } while ($opcion !=0);
        echo ("Adiós!\n");
    */


/* esto funciona
$medico = new Medico("Juan","Lopez","12345678","Cardiologia","123456");
$medico->ingresarDatosHistorial();

esto tambien funciona
$paciente= new Paciente("Lucia","Romeo","42773590");
$paciente->agendarTurno();
*/