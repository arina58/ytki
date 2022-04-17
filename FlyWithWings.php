<?php
    require_once 'iflybehavior.php';

    class FlyWithWings implements FlyBehavior {
        public function fly(){
            echo 'Я лечу!<br>';
        }
    }
?>