<?php
    namespace ITEC\PRESENCIAL\DAW\PROG\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use ITEC\PRESENCIAL\DAW\PROG\examen\profesor;
use ITEC\PRESENCIAL\DAW\PROG\examen\hora;
use ITEC\PRESENCIAL\DAW\PROG\examen\asignaturas;

class examen{
    private profesor $profesor;
    private fecha $fechaexamen;
    private asignaturas $asignatura;
    private listadopreguntas $listapreguntas;
    private hora $hora;

    public function __construct()
    {
        
    }
}