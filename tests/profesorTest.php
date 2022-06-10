<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\profesor;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;
final class profesorTest extends TestCase{
    public function DPtestCreateProfesor(){
        return [
            "Profesor 1 y 2" => [
                "Profesor 1",
                1992,
                11,
                21,
                414
            ]
        ];
    }
        /**
         * @dataProvider DPtestCreateProfesor
         */
        public function testCreateProfesor($nombre, $year, $month, $day, $id){
            $fecha = fecha::createFecha($day, $month, $year);
            $profesor = profesor::createProfesorFecha($nombre, $year, $month, $day, $id);
            $this->assertEquals($nombre, $profesor->getName());
            $this->assertEquals($fecha, $profesor->getFechanacimiento());
            $this->assertEquals($id, $profesor->getID());
        }
    }