<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/api/v1/captcha', function() use($app) {
    $cs = new CaptchaService(new RandomGenerator());
    $csObj = $cs->getCaptcha();
    return $csObj->getResult();
});

$app->run();