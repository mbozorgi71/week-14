<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\siteController;
use app\controllers\AuthController;
use app\core\Application;


$app =new Application(dirname(__DIR__));

$app -> router -> get('/' , [siteController::class,'home']);
$app -> router -> post('/' , [siteController::class,'home']);

$app -> router -> get('/contact' , [siteController::class,'contact']);
$app -> router -> post('/contact' ,[siteController::class,'handleContact']);


$app -> router -> get('/login' , [AuthController::class,'login']);
$app -> router -> post('/login' , [AuthController::class,'login']);

$app -> router -> get('/register' , [AuthController::class,'register']);
$app -> router -> post('/register' , [AuthController::class,'register']);

$app -> router -> get('/doctorRegister' , [AuthController::class,'doctorRegister']);
$app -> router -> post('/doctorRegister' , [AuthController::class,'doctorRegister']);

$app -> router -> get('/part' , [AuthController::class,'part']);
$app -> router -> post('/part' , [AuthController::class,'part']);

$app -> router -> get('/admin' , [AuthController::class,'admin']);
$app -> router -> post('/admin' , [AuthController::class,'admin']);

$app -> router -> get('/showDoctor' , [AuthController::class,'showDoctor']);
$app -> router -> post('/showDoctor' , [AuthController::class,'showDoctor']);


$app -> router -> get('/showAdmin' , [AuthController::class,'showAdmin']);
$app -> router -> post('/showAdmin' , [AuthController::class,'showAdmin']);


$app -> run();

//----------------------


