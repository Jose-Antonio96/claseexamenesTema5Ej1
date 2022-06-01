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

    public function getProfesor():profesor{
        return $this->profesor;
    }

    public function getFechaExamen():fecha{
        return $this->fechaexamen;
    }

    public function getAsignatura():asignaturas{
        return $this->asignaturas;
    }

    public function getListaPreguntas():listadopreguntas{
        return $this->listapreguntas;
    }

    public function getHora():hora{
        return $this->hora;
    }

    public function setProfesor(profesor $profesor){
        return $this-> profesor = $profesor;
    }
}