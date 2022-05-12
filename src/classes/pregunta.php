<?php
namespace ITEC\PRESENCIAL\DAW\PROG\examen;

class pregunta{
    private string $description;
    private static $lastidentifier=0;
    private int $maxgrade;

    public function __construct(int $lastidentifier, string $description, int $maxgrade){
        $this->description = $description ;
        $this->identifier = self::$lastidentifier++;
        $this->maxgrade = $maxgrade;
    }
   
    public static function createPregunta(int $uniqueidentifier, string $description, int $maxgrade){
        return new pregunta($uniqueidentifier, $description, $maxgrade);
    }

    public function getuniqueIdentifier():int{
        return $this->uniqueidentifier;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function getmaxGrade():int{
        return $this->maxgrade;
    }

    public function isGradelegit(int $grade):bool{
        return $grade <= $this->maxgrade && $grade >= 0;
    }

    public function isThisIdentifier(int $identifier):bool{
        return $this->identifier === $identifier;
    }

    public function containpreguntas(string $description):bool{
        $nchars=(similar_text($this->description, $description));
        return $nchars >= strlen($description);
    }
    
}


 