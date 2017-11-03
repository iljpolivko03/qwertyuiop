<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");

$name=$_GET['name'];
$label=$app->(['Label',$name]);
