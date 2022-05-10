<?php
    namespace ITEC\PRESENCIAL\DAW\PROG\examen;

    class hora{
        private int $horas;
        private int $minutos;
        private int $segundos;
        private \DateTime $datetimeObj;

        public function __construct(int $horas, int $minutos, int $segundos){
            $this->datetimeObj = new \DateTime();
            $this->datetimeObj->setTime($horas,$minutos,$segundos);
            $this->horas = $horas;
            $this->minutos = $minutos;
            $this->segundos = $segundos;  
        }

        public static function createHora(int $horas, int $minutos, int $segundos){
            return new hora($horas, $minutos, $segundos);
        }

        public function __toString(){
            return $this->datetimeObj->format("G:i:s"); //Esto indica que el objeto datetimeObj
                                                //tendrá 24h, 60 min y 60 sec de formato
        }

        public function getHoraStr():string{ //Le indicamos que es un string y hara uso de
                                            //la función toString. Le forzamos a que vaya a esa funcion
            return $this;
        }

        public function getDateTime():\DateTime{ //DateTime no tiene la capacidad de 
                                            //crear un string implementado. Tendríamos que implementar el formato que queremos
            return $this->datetimeObj;
        }

        public function getDaysLeft(){
            $now = new \DateTime();

            return $now->diff($this->datetimeObj)->format("G:i:s"); //Hacemos uso de diff 
                                                                    //para que nos haga el trabajo sucio
        }
    }

?>