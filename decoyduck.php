<?php
    require_once 'duck.php';
    require_once 'FlyNoWay.php';
    require_once 'mutequack.php';

    class DecoyDuck extends Duck{
        public function __construct(){
            $this->flyBehavior = new FlyNoWay();
            $this->quackBehavior = new MuteQuack();
        }
        public function display(){
            echo 'Я утка приманка.<br>';
        }
    }

?>