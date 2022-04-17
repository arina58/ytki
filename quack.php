<?php
    require_once 'iQuackBehavior.php';

    class Quack implements QuackBehavior {
        public function quack_(){
            echo 'Кря-кря!<br>';
        }
    }
?>