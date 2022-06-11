<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;
final class fechaTest extends TestCase{
    public function DPtestCrearFecha(){
        return [
            "Fecha 1 " => [
                13,
                10,
                1991,
                "13/10/1991"
            ]
        ];
    }
        /**
         * @dataProvider DPtestCrearFecha
         */
        public function testCrearFecha($day, $month, $year, $esperado){
            $fecha = fecha::createFecha($day, $month, $year);
            $this->assertEquals($esperado, $fecha->getFechaStr());
    }
}