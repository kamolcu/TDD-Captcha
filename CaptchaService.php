<?php
require_once 'Captcha.php';
class CaptchaService{
    private $rg;
    public function __construct($randomGenerator){
        $this->rg = $randomGenerator;
    }
    public function getCaptcha(){
        return new Captcha($this->rg->getPattern(), $this->rg->getOperand(),
                $this->rg->getOperator(), $this->rg->getOperand());
    }
}