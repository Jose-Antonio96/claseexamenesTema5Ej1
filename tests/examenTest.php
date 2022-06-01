<?php
use ITEC\PRESENCIAL\DAW\PROG\examen\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\asignaturas;
use ITEC\PRESENCIAL\DAW\PROG\examen\profesor;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
use ITEC\PRESENCIAL\DAW\PROG\examen\hora;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use PHPUnit\Framework\TestCase;
class examenTest extends Testcase{
    public function DPtestexamen(){
        $profesor1 = new profesor("Juan", "1, 6, 2022", "12345678A");
        $asignaturas1 = new asignaturas("Programacion", "DAW", "1");
        $fecha1 = new fecha(1, 6, 2022);
        
        $listapreguntas1 = new listadopreguntas();
        $hora1 = new hora(10, 30, 42);
        $examen1 = new examen($profesor1, $fecha1, $asignaturas1, $listapreguntas1, $hora1);
        return $examen1;
    }
    /**
     * @dataProvider DPtestexamen
     */

        
    
}