<?php
    namespace ITEC\PRESENCIAL\DAW\PROG\examen;

    class fecha{
        private int $days;
        private int $months;
        private int $years;
        private \DateTime $datetimeObj;

        public function __construct(int $days, int $months, int $years){
            $this->datetimeObj = new \DateTime();
            $this->datetimeObj->setDate($years,$months,$days); //Tiene que ser este orden
            $this->days = $days;
            $this->months = $months;
            $this->years = $years;  
        }

        public static function createFecha(int $days, int $months, int $years){
            return new fecha($days, $months, $years);
        }

        public function __toString(){
            return $this->datetimeObj->format("j/n/Y"); //Esto indica que el objeto datetimeObj
                                                //tendrá 24h, 60 min y 60 sec de formato
        }

        public function getFechaStr():string{ //Le indicamos que es un string y hara uso de
                                            //la función toString. Le forzamos a que vaya a esa funcion
            return $this;
        }

        public function getDateStr():string{ //DateTime no tiene la capacidad de 
                                            //crear un string implementado. Tendríamos que implementar el formato que queremos
            return $this->datetimeObj->format("j/n/Y");
        }

        public function getTimeLeft(){
            $now = new \DateTime();

            return $now->diff($this->datetimeObj)->format("j/n/Y"); //Hacemos uso de diff 
                                                                    //para que nos haga el trabajo sucio
        }
    }

?>