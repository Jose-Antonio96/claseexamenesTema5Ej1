<?php
use ITEC\PRESENCIAL\DAW\PROG\examen\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
use ITEC\PRESENCIAL\DAW\PROG\examen\hora;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use ITEC\PRESENCIAL\DAW\PROG\examen\profesor;
use ITEC\PRESENCIAL\DAW\PROG\examen\asignaturas;

include_once "../vendor/autoload.php";
//En la clase no se carga el autoload porque no va a hacer falta
$fecha = fecha::createFecha(2020, 01, 01);
$profesor = profesor::create("Juan", $fecha, 8956121);
$asignaturas = asignaturas::createasignatura(21, "Base de datos");
$listadopreguntas = new listadopreguntas();
$listadopreguntas->addNewQuestion("¿Que es una función?", 10);
$fechaexamen = fecha::createFecha(1, 6, 2012);
$hora = hora::createHora(10, 30, 42);

$examen = new examen($profesor, $fechaexamen, $asignaturas, $listadopreguntas, $hora);
var_dump($examen->getListaPreguntas());