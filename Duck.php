<?php
    require_once 'iflybehavior.php';
    require_once 'iQuackBehavior.php';

    abstract class Duck{
        protected $flyBehavior;
        protected $quackBehavior;

        abstract public function display();
        public function performFly(){
            $this->flyBehavior->fly();
        }
        public function swim(){
            echo 'Все утки умеют плавать, даже деревянные<br>';
        }
        public function performQuack(){
            $this->quackBehavior->quack_();
        }
    }
?>