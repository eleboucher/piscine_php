<?php
    class NightsWatch{
        private $members = array();
        public function recruit($a){
            if ($a instanceof IFighter)
                array_push($this->members, $a);
        }
        public function fight(){
            foreach ($this->members as $m){
                $m->fight();
            }
        }
    }
?>