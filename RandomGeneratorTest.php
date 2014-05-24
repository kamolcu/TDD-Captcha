<?php
require_once 'RandomGenerator.php';
class RandomGeneratorTest extends PHPUnit_Framework_TestCase{
    public function testGetPattern(){
        $rg = new RandomGenerator();
        $this->assertContains($rg->getPattern(),
                array(
                        1,
                        2
                ));
    }
    public function testGetOperand(){
        $rg = new RandomGenerator();
        $this->assertContains($rg->getOperand(),
                array(
                        1,
                        2,
                        3,
                        4,
                        5,
                        6,
                        7,
                        8,
                        9
                ));
    }
    public function testGetOperator(){
        $rg = new RandomGenerator();
        $this->assertContains($rg->getOperator(),
                array(
                        1,
                        2,
                        3
                ));
    }
}