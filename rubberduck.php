<?php
    require_once 'duck.php';
    require_once 'FlyNoWay.php';
    require_once 'squeak.php';

    class RubberDuck extends Duck{
        public function __construct(){
            $this->flyBehavior = new FlyNoWay();
            $this->quackBehavior = new SQueak();
        }
        public function display(){
            echo 'Я резиновая утка.<br>';
        }
    }

?>