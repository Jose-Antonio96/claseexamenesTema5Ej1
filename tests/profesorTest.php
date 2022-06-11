<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\profesor;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;
final class profesorTest extends TestCase{
    public function DPtestCreateProfesor(){
        return [
            "Profesor 1 " => [
                "Profesor 1",
                1992,
                11,
                21,
                1864262
            ]
        ];
    }
        /**
         * @dataProvider DPtestCreateProfesor
         */
        public function testCreateProfesor($nombre, $year, $month, $day, $id){
            $profesor = profesor::createProfesorFecha($nombre, $year, $month, $day, $id );
            $this->assertEquals($nombre, $profesor->getName());
            $this->assertEquals($id, $profesor->getID());
    }
}