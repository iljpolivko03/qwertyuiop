<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");

$c=$_GET['name'];
$d=$_GET['surname']
$label=$app->add(['Label',$c]);
