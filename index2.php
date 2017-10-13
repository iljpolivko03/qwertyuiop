<?php
echo "O privet";
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");
$label=$app->add(['Label','Поиск']);
$button= $app->add(['Button','Ilja']);
$button->link('index.php');
$button->addClass('Massive Blue');
