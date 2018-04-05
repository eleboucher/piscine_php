<?php 
    Class Jaime extends Lannister {
        public function sleepWith($a){
            if ($a instanceof Cersei){
                echo "With pleasure, but only in a tower in Winterfell, then.\n";
                return ;
            } elseif ($a instanceof Lannister){
                echo "Not even if I'm drunk !\n";
            }
            else {
                echo "Let's do this.\n";
            }
        }
    }
?>