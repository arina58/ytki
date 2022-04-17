<?php
    require_once 'duck.php';
    require_once 'FlyWithWings.php';
    require_once 'quack.php';

    class RedHeadDuck extends Duck{
        public function __construct(){
            $this->flyBehavior = new FlyWithWings();
            $this->quackBehavior = new Quack();
        }
        public function display(){
            echo 'Я красноголовая утка.<br>';
        }
    }

?>