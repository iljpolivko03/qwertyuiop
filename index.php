<?php
echo "O privet";
require 'vendor/autoload.php';
$app = new \atk4\ui\App("A ja tebja znaju");
$app->initLayout("Centered");
$button = $app->add('Button');
$button->set('Add invoice');
$button->icon = 'plus';
