<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Error");
$app->initLayout("Centered");
$msg=$app->add(['Message','Ahaahhahahagshggdh',
'type'=>'error',
'icon'=>'warning sign']);
