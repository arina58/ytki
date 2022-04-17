<?php
    require_once 'iQuackBehavior.php';

    class MuteQuack implements QuackBehavior {
        public function quack_(){
            echo 'Я не умею говорить!<br>';
        }
    }
?>