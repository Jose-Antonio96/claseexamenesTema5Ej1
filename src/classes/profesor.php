<?php
namespace ITEC\PRESENCIAL\DAW\PROG\examen;
use ITEC\PRESENCIAL\DAW\PROG\examen\fecha;

class profesor{
    private string $nombre;
    private fecha $fechanacimiento;
    private int $id;

    public function __construct(string $nombre, fecha $fechanacimiento, int $id)
    {
        $this->nombre = $nombre;
        $this-> fechanacimiento = $fechanacimiento;
        $this-> id = $id;
    }

    public static function create(string $nombre, fecha $fechanacimiento, int $id){
        return new profesor ($nombre, $fechanacimiento, $id);
    }
    //Otra forma de hacer la misma funcion a continuacion
    public static function createProfesorFecha(string $nombre, int $year, int $month, int $day, int $id){
        $fecha = fecha::createFecha($day, $month, $year);
        return self::create($nombre, $fecha, $id);
    }
    //Con esto, el profesor depende completamente de fecha. Arriesgado, ya que crea deuda tecnica.
    //Usar el create es recomendado si ya tenemos la fecha, pero el createProfesorFecha es mas conveniente ya que nos genera una fecha dentro de la misma funcion
    public function getName():string{
       return $this->nombre; 
    }

    public function getFechanacimiento():fecha{
        return $this->fechanacimiento;
    }

    public function getFechanacimientoStr():string{
        return $this->fechanacimiento->getFechaStr();
    }
}
