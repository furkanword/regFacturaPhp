<?php 
    class TypeEmployee{
        private $idTypeEmployee;
        private $nameTypeEmployee;
        public function __construct($idTypeEmployee, $nameTypeEmployee){
            $this->idTypeEmployee = $idTypeEmployee;
            $this->nameTypeEmployee = $nameTypeEmployee;
        }
        public function getIdTypeEmployee(){
            return $this->idTypeEmployee;
        }
        public function getNameTypeEmployee(){
            return $this->nameTypeEmployee;
        }
        public function setIdTypeEmployee($idTypeEmployee){
            $this->idTypeEmployee = $idTypeEmployee;
            return $this;
        }
        public function setNameTypeEmployee($nameTypeEmployee){
            $this->nameTypeEmployee = $nameTypeEmployee;
            return $this;
        }

    }
?>