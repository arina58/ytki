<?php
    require_once 'iQuackBehavior.php';

    class SQueak implements QuackBehavior {
        public function quack_(){
            echo 'Пиии-пииии!<br>';
        }
    }
?>