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
    private asignaturas $asignaturas;
    private listadopreguntas $listapreguntas;
    private hora $hora;

    public function __construct(profesor $profesor,
                                fecha $fechaexamen,
                                asignaturas $asignatura,
                                listadopreguntas $listapreguntas,
                                hora $hora){
        $this-> profesor = $profesor;
        $this-> fecha = $fechaexamen;
        $this-> asignaturas = $asignatura;
        $this-> listadopreguntas = $listapreguntas;
        $this-> hora = $hora;
    }

    public static function createExamen(profesor $profesor,
                                        fecha $fechaexamen,
                                        asignaturas $asignatura,
                                        listadopreguntas $listapreguntas,
                                        hora $hora){
        return new examen($profesor, $fechaexamen, $asignatura, $listapreguntas, $hora);
    }

    public function getProfesor(){
        return $this->profesor;
    }

    public function getFechaExamen(){
        return $this->fechaexamen;
    }

    public function getAsignatura(){
        return $this->asignaturas;
    }

    public function getListaPreguntas(){
        return $this->listapreguntas;
    }

    public function getHora(){
        return $this->hora;
    }
}