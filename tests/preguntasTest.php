<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;
final class listadopreguntasTest extends TestCase{
    public function DPtestCreateQuestion(){
        return [
            "Pregunta 1 y 2" => [
                "Pregunta 1",
                1,
                1
            ]
        ];
    }
        /**
         * @dataProvider DPtestCreateQuestion
         */
        public function testCreateQuestion($description, $maxgrade, $esperado){
            $pregunta = pregunta::createPregunta($description, $maxgrade);
            $this->assertEquals($esperado, $pregunta->getmaxgrade());
    }
}
    