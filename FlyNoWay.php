<?php
    require_once 'iflybehavior.php';

    class FlyNoWay implements FlyBehavior {
        public function fly(){
            echo 'Я не умею летать!<br>';
        }
    }
?>