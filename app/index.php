<?php
use Gregwar\Captcha\CaptchaBuilder ; 
use Gregwar\Captcha\PhraseBuilder ;
require_once('vendor/autoload.php');
//echo md_sha('323dgas');
//app\home\indexController::index();

$phraseBuilder = new PhraseBuilder(4);
// $phraseBuilder = new PhraseBuilder(5,'absdefgimkjhp');
$captcha = new CaptchaBuilder(null,$phraseBuilder);
// $builder = new Gregwar\Captcha\CaptchaBuilder;
$captcha->build();

header('Content-type: image/jpeg');
$captcha->output();