<?php
echo "O privet";
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");
$label=$app->add(['Label','Мой','detail'=>'Поиск']);

$button= $app->add(['Button','Ilja']);
$button->link('index.php');
$button->addClass('massive blue');

$img= 'http://wiki.teamliquid.net/commons/images/thumb/f/fd/Cloud9.png/600px-Cloud9.png';
