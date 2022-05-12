<?php
namespace ITEC\PRESENCIAL\DAW\PROG\examen;

class asignaturas{
    private int $ui;
    private string $nombre;
     
    public function __construct(int $ui, string $nombre){
        $this->ui = $ui;
        $this->nombre = $nombre;
    }
    
    public static function createasignatura(int $ui, string $nombre){
        return new asignaturas($ui, $nombre);
    }

    public function getnombre():string{
        return $this->nombre; 
     }
 
    public function getui():int{
        return $this->ui;
    }
}