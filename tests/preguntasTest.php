<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;
final class listadopreguntasTest extends TestCase{
    public function DPtestCreateQuestion(){
        return [
            "Pregunta " => [
                "¿Qué día es hoy?",
                10,
                10
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

    public function DPtestisGradeLegit(){
        return [
            "Pregunta " => [
                "¿Cuantas piernas tiene un perro?",
                10,
                10
            ]
        ];
    }
        /**
         * @dataProvider DPtestisGradeLegit
         */
        public function testisGradeLegit($pregunta, $grade, $esperado){
            $pregunta = pregunta::createPregunta("¿Cuantas piernas tiene un perro?", 10);
            $this->assertEquals($esperado, $pregunta->isGradelegit($grade));
        }
}
    