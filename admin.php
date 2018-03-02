<?php
require 'vendor/autoload.php';
require 'connection.php';
$app = new \atk4\ui\App("Enter password");
$app->initLayout("Admin");
if((isset($_SESSION['hash']))&&($_SESSION['hash']!='utftf')){
  header('error.php');
}
//$msg=$app->add(['Message','Here->',]);
$crud=$app->layout->add('CRUD');
$crud->setModel(new Friends($db));

$button=$app->add('Button');
$button->set('Logout');
$button->link('logout.php');
