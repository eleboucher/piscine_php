<?php
    Class Tyrion extends Lannister {
        public function sleepWith($a){
            if ($a instanceof Lannister)
                echo "Not even if I'm drunk !\n";
            else 
                echo "Let's do this.\n";
        }
    }
?>