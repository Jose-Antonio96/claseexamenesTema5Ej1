<?php 
namespace ITEC\PRESENCIAL\DAW\PROG\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;

class listadopreguntas{
    private array $preguntas;
    /**
     * Undocumented function
     * 
     * @param array $preguntas
     * [
     *  "identifier"=>[
     *      "description"=>"",
     *      "maxgrade=>0
     *  ]
     * ]
     */
    private function __construct(array $preguntas){
        foreach($preguntas as $uniqueidentifier=>$pregunta){
            $this->preguntas[]=pregunta::createPregunta($pregunta["description"],$uniqueidentifier,$pregunta["maxgrade"]);
        }
    }

    public function addPregunta(pregunta $pregunta){
        $this->preguntas[] = $pregunta;
    }

    public function getNumpreguntas():int{
        return count($this->preguntas);
    }

    public function getTotalGrade():int{
        $total=0;
        foreach($this->preguntas as $pregunta){
            $total += $pregunta->getmaxGrade();
        }
        return $total;
    }
}
