<?php
require_once 'CaptchaService.php';
require_once 'RandomGenerator.php';
class CaptchaServiceTest extends PHPUnit_Framework_TestCase{
    public function testGetCaptcha_1112(){
        $stubRandom = $this->getMock('RandomGenerator');
        $stubRandom->expects($this->once())->method('getPattern')->will(
                $this->returnValue(1));
        $stubRandom->expects($this->exactly(2))->method('getOperand')->will(
                $this->onConsecutiveCalls(1, 2));
        $stubRandom->expects($this->once())->method('getOperator')->will(
                $this->returnValue(1));
        $cs = new CaptchaService($stubRandom);
        $obj = $cs->getCaptcha();
        $this->assertSame('3', $obj->getResult());
        $this->assertSame('One', $obj->getLeftOperand());
        $this->assertSame('2', $obj->getRightOperand());
        $this->assertSame('+', $obj->getOperator());
    }
}