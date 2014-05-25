<?php
class RandomGenerator{
    public function getPattern(){
        return $this->getRandomValue(1, 2);
    }
    public function getOperand(){
        return $this->getRandomValue(1, 9);
    }
    public function getOperator(){
        return $this->getRandomValue(1, 3);
    }
    private function getRandomValue($startFrom, $endAt){
        return rand($startFrom, $endAt);
    }
}