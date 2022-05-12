<?php 
namespace ITEC\PRESENCIAL\DAW\PROG\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\pregunta;

class listadopreguntas{
    private array $preguntas;
    private function __construct(array $preguntas){
    $this->preguntas =[];
    }

    public function addCreatePregunta(string $description, )
        this-> 
   
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

    public function getpregunta(int $uniqueidentifier):pregunta{
       foreach($this-> preguntas as $pregunta)
        if($pregunta->isThisIdentifier($uniqueidentifier))
            return $pregunta;
        return null;
    }

    public function getpreguntabydescription(string $description):listadopreguntas{
        $listadopreguntas = new listadopreguntas();
        foreach($this-> preguntas as $pregunta)
            if ($pregunta->contain($description))
                $listadopreguntas->addPregunta($pregunta);
        return $listadopreguntas;
    }

    //En las preguntas, habiendo una descripción que es un string, lo que buscamos ahora
    //es generar un filtro con un listado de preguntas, introduciendo una palabra como referente

    
}
