<?php
namespace ITEC\PRESENCIAL\DAW\PROG\examen;

class pregunta{
    private int $id;
    private string $description;
    private int $maxgrade;

    private static int $lastidentifier = 0;


    public function __construct(string $description, int $maxgrade){
        $this->description = $description ;
        $this->identifier = self::$lastidentifier++;
        $this->maxgrade = $maxgrade;
    }
   
    public static function createPregunta(string $description, int $maxgrade):pregunta {
        return new pregunta($description, $maxgrade);
    }

    public function getuniqueIdentifier():int{
        return $this->uniqueidentifier;
    }

    public function getDescription():string{
        return $this->description;
    }

    public function getmaxgrade():int{
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


 