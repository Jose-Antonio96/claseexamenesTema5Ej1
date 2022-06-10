<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\examen\listadopreguntas;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;
final class listadopreguntasTest extends TestCase{
    public function testCreateQuestion(){
        $preguntas = [
            pregunta::createPregunta("Pregunta 1", 10),
            pregunta::createPregunta("Pregunta 2", 20),
            pregunta::createPregunta("Pregunta 3", 30),
            pregunta::createPregunta("Pregunta 4", 40),
            pregunta::createPregunta("Pregunta 5", 50),
        ];
        $listadopreguntas = listadopreguntas::createQuestion($preguntas);
        $this->assertEquals(5, $listadopreguntas->getNumpreguntas());
        $this->assertEquals(150, $listadopreguntas->getTotalGrade());
    }
}
    