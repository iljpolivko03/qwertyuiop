<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");

$c=$_GET['name'];
$label=$app->add(['Label',$c]);

$c=$_GET['surnname'];
$label=$app->add(['Label',$c]);
