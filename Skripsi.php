<?php

class Skripsi{
        private $skripsi;


        public function getSkripsi(){
          return $this->skripsi;
        }

        public function setSkripsi($amount){
          $this->skripsi = $amount;
        }

        public function turnWheel(){
          $this->setSkripsi($this->getSkripsi() -2);
        }
}


 ?>
