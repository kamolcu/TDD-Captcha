<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class CaptchaController{
    public function captcha(){
        $cs = new CaptchaService(new RandomGenerator());
        $csObj = $cs->getCaptcha();
        return $csObj->toString();
    }
}