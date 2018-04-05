<?php
    class Targaryen{
        public function resistsFire() {
            return False;
        }
        public function getBurned(){
            return ($this->resistsFire() === false) ? "burns alive" : "emerges naked but unharmed";
        }
    }
?>